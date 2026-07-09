<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('backend/Navbar_model','navbar_model');
        $this->load->helper('text');
        error_reporting(0);
	}
	
    function index(){
		//$this->output->enable_profiler(TRUE);
        $data['url'] =  $this->navbar_model->get_navbar();
        // echo print_r($data);die();
		$this->load->view('sitemap/index',$data);
	}

}