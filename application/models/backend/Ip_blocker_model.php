<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ip_blocker_model extends CI_Model {

    function get_all($limit, $offset) {
        $this->db->order_by('blocked_at', 'DESC');
        return $this->db->get('tbl_ip_block', $limit, $offset);
    }

    function count_all() {
        return $this->db->count_all('tbl_ip_block');
    }

    function get_by_id($id) {
        return $this->db->get_where('tbl_ip_block', array('id' => $id));
    }

    function unblock($id) {
        $this->db->where('id', $id)->delete('tbl_ip_block');
    }

    function block_permanent($id) {
        $this->db->where('id', $id)->set('permanent', 1)->set('expires_at', NULL)->update('tbl_ip_block');
    }

    function unblock_permanent($id) {
        $this->db->where('id', $id)->set('permanent', 0)->set('expires_at', date('Y-m-d H:i:s', strtotime('+1 hour')))->update('tbl_ip_block');
    }

    function cleanup() {
        $this->db->where('permanent', 0);
        $this->db->where('expires_at IS NOT NULL');
        $this->db->where('expires_at <= NOW()');
        $this->db->delete('tbl_ip_block');
    }
}
