<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ip_blocker_lib {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function get_ip() {
        $ip = $this->CI->input->ip_address();

        // Trust X-Forwarded-For jika di belakang proxy/load balancer
        if ($this->CI->input->server('HTTP_X_FORWARDED_FOR')) {
            $forwarded = explode(',', $this->CI->input->server('HTTP_X_FORWARDED_FOR'));
            $ip = trim($forwarded[0]);
        }

        return $ip;
    }

    public function is_blocked($ip = null) {
        if (!$ip) $ip = $this->get_ip();

        $this->CI->db->where('ip_address', $ip);
        $this->CI->db->where('(permanent = 1 OR expires_at > NOW())');
        $query = $this->CI->db->get('tbl_ip_block');

        return $query->num_rows() > 0;
    }

    public function check_and_register($threshold = 5, $window_minutes = 5) {
        $ip = $this->get_ip();

        // Cek blokir aktif
        if ($this->is_blocked($ip)) {
            return false;
        }

        // Ambil data IP
        $this->CI->db->where('ip_address', $ip);
        $query = $this->CI->db->get('tbl_ip_block');
        $row = $query->row();

        $now = date('Y-m-d H:i:s');
        $window_start = date('Y-m-d H:i:s', strtotime("-{$window_minutes} minutes"));

        if ($row) {
            // IP sudah pernah dicatat — update attempts dan last_attempt_at
            $this->CI->db->where('ip_address', $ip);

            // Reset attempts jika sudah lewat window
            if ($row->last_attempt_at < $window_start) {
                $this->CI->db->set('attempts', 1);
            } else {
                $this->CI->db->set('attempts', 'attempts + 1', FALSE);
            }

            $this->CI->db->set('last_attempt_at', $now);
            $this->CI->db->update('tbl_ip_block');

            $attempts = ($row->last_attempt_at < $window_start) ? 1 : ($row->attempts + 1);
        } else {
            // IP baru
            $data = array(
                'ip_address'      => $ip,
                'attempts'        => 1,
                'last_attempt_at' => $now,
            );
            $this->CI->db->insert('tbl_ip_block', $data);
            $attempts = 1;
        }

        // Jika melebihi threshold, blokir
        if ($attempts >= $threshold) {
            $expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

            $this->CI->db->where('ip_address', $ip);
            $this->CI->db->set('reason', "Auto-block: {$attempts} attempts in {$window_minutes} minutes");
            $this->CI->db->set('blocked_at', $now);
            $this->CI->db->set('expires_at', $expires);
            $this->CI->db->update('tbl_ip_block');

            log_message('info', "IP Blocked: {$ip} - {$attempts} attempts in {$window_minutes} minutes");
            return false;
        }

        return true; // allowed
    }

    public function block($ip, $reason = 'Manual block', $permanent = true) {
        $data = array(
            'ip_address'      => $ip,
            'attempts'        => 999,
            'reason'          => $reason,
            'blocked_at'      => date('Y-m-d H:i:s'),
            'last_attempt_at' => date('Y-m-d H:i:s'),
            'expires_at'      => $permanent ? null : date('Y-m-d H:i:s', strtotime('+1 hour')),
            'permanent'       => $permanent ? 1 : 0,
        );

        $this->CI->db->where('ip_address', $ip);
        $query = $this->CI->db->get('tbl_ip_block');

        if ($query->num_rows() > 0) {
            $this->CI->db->where('ip_address', $ip)->update('tbl_ip_block', $data);
        } else {
            $this->CI->db->insert('tbl_ip_block', $data);
        }
    }

    public function unblock($ip) {
        $this->CI->db->where('ip_address', $ip)->delete('tbl_ip_block');
    }

    public function get_blocked($limit = 50, $offset = 0) {
        $this->CI->db->order_by('blocked_at', 'DESC');
        $query = $this->CI->db->get('tbl_ip_block', $limit, $offset);
        return $query;
    }

    public function count_blocked() {
        return $this->CI->db->count_all_results('tbl_ip_block');
    }

    public function cleanup_expired() {
        $this->CI->db->where('permanent', 0);
        $this->CI->db->where('expires_at IS NOT NULL');
        $this->CI->db->where('expires_at <= NOW()');
        $this->CI->db->delete('tbl_ip_block');
    }
}
