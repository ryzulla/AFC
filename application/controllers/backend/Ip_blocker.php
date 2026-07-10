<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ip_blocker extends CI_Controller {

    function __construct(){
        parent::__construct();
        if($this->session->userdata('logged') != TRUE){
            $url = base_url('administrator');
            redirect($url);
        }
        $this->load->model('backend/Ip_blocker_model', 'ip_model');
        $this->load->helper('text');
    }

    function index(){
        $this->cleanup_expired();

        $limit = 20;
        $offset = $this->uri->segment(4) ? ($this->uri->segment(4) - 1) * $limit : 0;

        $data['data'] = $this->ip_model->get_all($limit, $offset);
        $data['total'] = $this->ip_model->count_all();

        // Pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('backend/ip_blocker/page');
        $config['total_rows'] = $data['total'];
        $config['per_page'] = $limit;
        $config['uri_segment'] = 4;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['next_link'] = '&raquo;';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['title'] = 'IP Blocker';
        $data['menu'] = 'ip_blocker';
        $data['submenu'] = 'ip_blocker';

        $this->load->view('backend/v_header', $data);
        $this->load->view('backend/v_ip_blocker', $data);
        $this->load->view('backend/v_footer');
    }

    function unblock($id){
        if($this->session->userdata('access') != '1'){
            redirect('backend/ip_blocker');
        }
        $this->ip_model->unblock($id);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/ip_blocker');
    }

    function make_permanent($id){
        if($this->session->userdata('access') != '1'){
            redirect('backend/ip_blocker');
        }
        $this->ip_model->block_permanent($id);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/ip_blocker');
    }

    function make_temporary($id){
        if($this->session->userdata('access') != '1'){
            redirect('backend/ip_blocker');
        }
        $this->ip_model->unblock_permanent($id);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/ip_blocker');
    }

    function cleanup_expired(){
        $this->load->library('ip_blocker_lib', NULL, 'ip_blocker');
        $this->ip_blocker->cleanup_expired();
    }
}
