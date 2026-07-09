<?php
class Pengiriman_model extends CI_Model{
	//BACKEND
	function get_all_pengiriman(){
		$result = $this->db->query("SELECT pengiriman_id,pengiriman_title,pengiriman_image FROM tbl_pengiriman");
		return $result;
	}

	function get_pengiriman_by_id($pengiriman_id){
		$result = $this->db->query("SELECT * FROM tbl_pengiriman WHERE pengiriman_id='$pengiriman_id'");
		return $result;
	}

	function save_pengiriman($title,$image){
		$data = array(
	        'pengiriman_title' 	   => $title,
	        'pengiriman_image' 	   => $image,
		);
		$this->db->insert('tbl_pengiriman', $data);
	}

	function edit_pengiriman_with_img($id,$title,$image){
		$result = $this->db->query("UPDATE tbl_pengiriman SET pengiriman_title='$title',pengiriman_image='$image' WHERE pengiriman_id='$id'");
		return $result;
	}

	function edit_pengiriman_no_img($id,$title){
		$result = $this->db->query("UPDATE tbl_pengiriman SET pengiriman_title='$title' WHERE pengiriman_id='$id'");
		return $result;
	}

	function delete_pengiriman($pengiriman_id){
		$this->db->where('pengiriman_id', $pengiriman_id);
		$this->db->delete('tbl_pengiriman');
	}
	
	//END BACKEND

}