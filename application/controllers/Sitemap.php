<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('backend/Navbar_model','navbar_model');
		$this->load->model('Blog_model','blog_model');
		$this->load->model('Productlist_model','productlist_model');
        $this->load->helper('text');
        error_reporting(0);
	}

    function index(){
        $data['url'] =  $this->navbar_model->get_navbar();
        $data['posts'] = $this->blog_model->get_blogs();
        $data['products'] = $this->productlist_model->get_products();
        $data['categories'] = $this->db->get('tbl_category');
        $data['tags'] = $this->db->get('tbl_tags');
        $this->load->view('sitemap/index',$data);
	}

}