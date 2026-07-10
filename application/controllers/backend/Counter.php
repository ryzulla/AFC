<?php
class Counter extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Counter_model','counter_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->counter_model->get_all_counter();
		$x['title'] = 'Counter';
		$x['menu'] = 'counter';
		$this->load->view('backend/v_header', $x);
		$this->load->view('backend/v_counter', $x);
		$this->load->view('backend/v_footer');
	}

	function save(){
		$counter_number =$this->input->post('counter_number',TRUE);
		$this->counter_model->add_new_row($counter_number);
		$this->session->set_flashdata('msg','success');
		redirect('backend/counter');
	}

	function edit(){
		$id		  = $this->input->post('counter_id',TRUE);
		$counter_number = $this->input->post('counter_number2',TRUE);
		$this->counter_model->edit_row($id,$counter_number);
		$this->session->set_flashdata('msg','info');
		redirect('backend/counter');
	}

	function delete(){
		$id = $this->input->post('id',TRUE);
		$this->counter_model->delete_row($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('backend/counter');
	}

}