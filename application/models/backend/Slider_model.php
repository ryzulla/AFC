<?php
class Slider_model extends CI_Model{
	//BACKEND
	function get_all_slider(){
		$result = $this->db->query("SELECT slider_id,slider_title,slider_image,slider_category FROM tbl_slider");
		return $result;
	}

	function get_slider_by_id($slider_id){
		$result = $this->db->query("SELECT * FROM tbl_slider WHERE slider_id='$slider_id'");
		return $result;
	}

	function save_slider($title,$image,$category){
		$data = array(
	        'slider_title' 	   => $title,
	        'slider_image' 	   => $image,
	        'slider_category' 	   => $category,
		);
		$this->db->insert('tbl_slider', $data);
	}

	function edit_slider_with_img($id,$title,$image,$category){
		$result = $this->db->query("UPDATE tbl_slider SET slider_title='$title',slider_image='$image',slider_category='$category' WHERE slider_id='$id'");
		return $result;
	}

	function edit_slider_no_img($id,$title,$category){
		$result = $this->db->query("UPDATE tbl_slider SET slider_title='$title',slider_category='$category' WHERE slider_id='$id'");
		return $result;
	}

	function delete_slider($slider_id){
		$this->db->where('slider_id', $slider_id);
		$this->db->delete('tbl_slider');
	}
	
	//END BACKEND

}