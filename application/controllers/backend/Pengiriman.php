<?php
class Pengiriman extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Pengiriman_model','pengiriman_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->pengiriman_model->get_all_pengiriman();
		$this->load->view('backend/v_pengiriman',$x);
	}

	function add_new(){
		// $x['tag']	   = $this->tag_model->get_all_tag();
		// $x['category'] = $this->category_model->get_all_category();
		$this->load->view('backend/v_add_pengiriman',$x);
	}

	function get_edit(){
		$pengiriman_id = $this->uri->segment(4);
		$x['data'] = $this->pengiriman_model->get_pengiriman_by_id($pengiriman_id);
		$this->load->view('backend/v_edit_pengiriman',$x);
	}

	function publish(){
		$config['upload_path'] = './assets/images/pengiriman/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
			
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data(); 

	            $image=$img['file_name'];
				$title	  = $this->input->post('title',TRUE);
				
				$this->pengiriman_model->save_pengiriman($title,$image);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/pengiriman');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/pengiriman');
	        }
	    }else{
			var_dump('aaa');die();
			redirect('backend/pengiriman');
		}
	}

	function edit(){
		$config['upload_path'] = './assets/images/pengiriman/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto2']['name'])){
	        if ($this->upload->do_upload('filefoto2')){
	            $img = $this->upload->data();
	            //Compress Image
	            // $config['image_library']='gd2';
	            // $config['source_image']='./assets/images/'.$img['file_name'];
	            // $config['create_thumb']= FALSE;
	            // $config['maintain_ratio']= FALSE;
	            // $config['quality']= '60%';
	            // $config['width']= 500;
	            // $config['height']= 320;
	            // $config['new_image']= './assets/images/'.$img['file_name'];
	            // $this->load->library('image_lib', $config);
	            // $this->image_lib->resize();

	            // $this->_create_thumbs($img['file_name']);

	            $image=$img['file_name'];
	            $id 	  = $this->input->post('pengiriman_id',TRUE);
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				
				$this->pengiriman_model->edit_pengiriman_with_img($id,$title,$image);
				echo $this->session->set_flashdata('msg','info');
				redirect('backend/pengiriman');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/pengiriman');
	        }
	    }else{
	    	$id 	  = $this->input->post('pengiriman_id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title2',TRUE),ENT_QUOTES));
			// var_dump($id);die();
			$this->pengiriman_model->edit_pengiriman_no_img($id,$title);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/pengiriman');
		}
	}

	function delete(){
		$pengiriman_id = $this->input->post('id',TRUE);
		$this->pengiriman_model->delete_pengiriman($pengiriman_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/pengiriman');
	}

}
