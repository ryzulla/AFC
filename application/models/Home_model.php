<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	
	function get_post_slider(){
		$this->db->select('tbl_slider.*');
		$this->db->from('tbl_slider');
		$this->db->where('slider_category','Header');
		// $this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('slider_id', 'DESC');
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function get_slider_legality(){
		$this->db->select('tbl_slider.*');
		$this->db->from('tbl_slider');
		$this->db->where('slider_category','Legality');
		// $this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('slider_id', 'DESC');
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function get_pengiriman(){
		$this->db->select('tbl_pengiriman.*');
		$this->db->from('tbl_pengiriman');
		// $this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('pengiriman_id', 'DESC');
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function get_post_header_2(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(2,1);
		$query = $this->db->get();
		return $query;
	}

	function get_post_header_3(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(3,3);
		$query = $this->db->get();
		return $query;
	}

	function get_latest_post(){
		$this->db->select('tbl_post.*, user_name, user_photo');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_id', 'DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query;
	}

	function get_popular_post(){
		$this->db->select('tbl_post.*, user_name');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user', 'post_user_id=user_id','left');
		$this->db->order_by('post_views', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query;
	}

	function checking_email($email){
		return $this->db->get_where('tbl_subscribe', array('subscribe_email' => $email));
	}

	function save_subcribe($email){
		$this->db->insert('tbl_subscribe', array('subscribe_email' => $email));
	}
	

}