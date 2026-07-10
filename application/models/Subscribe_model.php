<?php
class Subscribe_model extends CI_Model{
	
	function checking_email($email){
		return $this->db->get_where('tbl_subscribe', array('subscribe_email' => $email));
	}
	
	function save_subcribe($email){
		$this->db->insert('tbl_subscribe', array('subscribe_email' => $email));
	}
}