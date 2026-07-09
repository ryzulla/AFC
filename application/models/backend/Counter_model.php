<?php
class Counter_model extends CI_Model{

	function get_all_counter(){
		$result = $this->db->get('tbl_counter');
		return $result; 
	}

	function add_new_row($counter_number){
		$data = array(
	        'counter_number' => $counter_number,
            'date' => date('Y-m-d'),
		);
		$this->db->insert('tbl_counter', $data);
	}

	function edit_row($id,$counter_number){
		$data = array(
	        'counter_number' => $counter_number,
		);
		$this->db->where('counter_id', $id);
		$this->db->update('tbl_counter', $data);
	}

	function delete_row($id){
		$this->db->where('counter_id', $id);
		$this->db->delete('tbl_counter');
	}
}