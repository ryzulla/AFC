<?php
class Category extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Category_model','category_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->category_model->get_all_category();
		$x['title'] = 'Category';
		$x['menu'] = 'product';
		$x['submenu'] = 'category';
		$this->load->view('backend/v_header', $x);
		$this->load->view('backend/v_category', $x);
		$this->load->view('backend/v_footer');
	}

	function save(){
		$category = strip_tags(htmlspecialchars($this->input->post('category',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $category);
		$slug     = url_title($category, '-', TRUE);
		$description = htmlspecialchars($this->input->post('description',TRUE),ENT_QUOTES);
		$this->category_model->add_new_row($category,$slug,$description);
		$this->session->set_flashdata('msg','success');
		redirect('backend/category');
	}

	function edit(){
		$id		  = $this->input->post('kode',TRUE);
		$category = strip_tags(htmlspecialchars($this->input->post('category2',TRUE),ENT_QUOTES));
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $category);
		$slug     = url_title($category, '-', TRUE);
		$description = htmlspecialchars($this->input->post('description2',TRUE),ENT_QUOTES);
		$this->category_model->edit_row($id,$category,$slug,$description);
		$this->session->set_flashdata('msg','info');
		redirect('backend/category');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->category_model->delete_row($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('backend/category');
	}
}