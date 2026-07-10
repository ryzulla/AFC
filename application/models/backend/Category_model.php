<?php
class Category_model extends CI_Model{

	function get_all_category(){
		$result = $this->db->get('tbl_category');
		return $result; 
	}

	function add_new_row($category,$slug,$description){
		$data = array(
	        'category_name'        => $category,
	        'category_slug'        => $slug,
	        'category_description' => $description
		);
		$this->db->insert('tbl_category', $data);
	}

	function edit_row($id,$category,$slug,$description){
		$data = array(
	        'category_name'        => $category,
	        'category_slug'        => $slug,
	        'category_description' => $description
		);
		$this->db->where('category_id', $id);
		$this->db->update('tbl_category', $data);
	}

	function delete_row($id){
		$this->db->where('category_id', $id);
		$this->db->delete('tbl_category');
	}


}