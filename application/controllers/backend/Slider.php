<?php
class Slider extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Slider_model','slider_model');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->slider_model->get_all_slider();
		$x['title'] = 'Slider';
		$x['menu'] = 'settings';
		$x['submenu'] = 'slider';
		$this->load->view('backend/v_header', $x);
		$this->load->view('backend/v_slider', $x);
		$this->load->view('backend/v_footer');
	}

	function add_new(){
		// $x['tag']	   = $this->tag_model->get_all_tag();
		// $x['category'] = $this->category_model->get_all_category();
		$x['title'] = 'Slider';
		$x['menu'] = 'settings';
		$x['submenu'] = 'slider';
		$this->load->view('backend/v_header', $x);
		$this->load->view('backend/v_add_slider', $x);
		$this->load->view('backend/v_footer');
	}

	function get_edit(){
		$slider_id = $this->uri->segment(4);
		$x['data'] = $this->slider_model->get_slider_by_id($slider_id);
		$x['title'] = 'Slider';
		$x['menu'] = 'settings';
		$x['submenu'] = 'slider';
		$this->load->view('backend/v_header', $x);
		$this->load->view('backend/v_edit_slider', $x);
		$this->load->view('backend/v_footer');
	}

	function publish(){
		// var_dump('a');exit();
		$config['upload_path'] = './assets/images/slider/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['encrypt_name'] = TRUE;

	    $this->upload->initialize($config);

	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	            $img = $this->upload->data(); 
				
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
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
				$category	  = $this->input->post('category',TRUE);
			
				$this->slider_model->save_slider($title,$image,$category);
				echo $this->session->set_flashdata('msg','success');
				redirect('backend/slider');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/slider');
	        }
	    }else{
			redirect('backend/slider');
		}
	}

	function edit(){
		$config['upload_path'] = './assets/images/slider/';
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
	            $id 	  = $this->input->post('slider_id',TRUE);
				$title	  = strip_tags(htmlspecialchars($this->input->post('title',TRUE),ENT_QUOTES));
	            $category	  = $this->input->post('category2',TRUE);
				

				$this->slider_model->edit_slider_with_img($id,$title,$image,$category);
				echo $this->session->set_flashdata('msg','info');
				redirect('backend/slider');
			}else{
	            echo $this->session->set_flashdata('msg','warning');
	            redirect('backend/slider');
	        }

	    }else{
	    	$id 	  = $this->input->post('slider_id',TRUE);
			$title	  = strip_tags(htmlspecialchars($this->input->post('title2',TRUE),ENT_QUOTES));
			$category	  = $this->input->post('category2',TRUE);
			// var_dump($id);die();
			$this->slider_model->edit_slider_no_img($id,$title,$category);
			echo $this->session->set_flashdata('msg','info');
			redirect('backend/slider');
		}
		

	}

	function delete(){
		$slider_id = $this->input->post('id',TRUE);
		$this->slider_model->delete_slider($slider_id);
		echo $this->session->set_flashdata('msg','success-delete');
		redirect('backend/slider');
	}

}
