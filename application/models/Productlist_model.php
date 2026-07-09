<?php

class Productlist_model extends CI_Model{
	
	function get_products(){
		$query = $this->db->get('tbl_product');
		return $query;
	}

	function get_product_perpage($offset,$limit){
		$this->db->select('tbl_product.*, user_name,user_photo');
		$this->db->from('tbl_product');
		$this->db->join('tbl_user', 'product_user_id=user_id','left');
		$this->db->order_by('product_id', 'DESC');
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query;
	}

	function get_product_by_slug($slug){
		$query = $this->db->query("SELECT tbl_product.*,user_name,COUNT(comment_id) AS comment_total,tbl_category.* FROM tbl_product 
			LEFT JOIN tbl_user ON product_user_id=user_id
			LEFT JOIN tbl_comment_product ON product_id=comment_product_id
			LEFT JOIN tbl_category ON product_category_id=category_id
			WHERE product_slug='$slug' GROUP BY product_id LIMIT 1");
		return $query;
	}

	function get_popular_product(){
		$this->db->select('tbl_product.*, user_name,user_photo');
		$this->db->from('tbl_product');
		$this->db->join('tbl_user', 'product_user_id=user_id','left');
		$this->db->order_by('product_views', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query;
	}

	function get_related_product($category_id,$kode){
		$query = $this->db->query("SELECT * FROM tbl_product LEFT JOIN tbl_user ON product_user_id=user_id 
			WHERE product_category_id='$category_id' AND NOT product_id='$kode' ORDER BY product_views DESC LIMIT 2");
		return $query;
	}

	function count_views($kode){
        $user_ip=$_SERVER['REMOTE_ADDR'];
        $cek_ip=$this->db->query("SELECT * FROM tbl_product_views WHERE view_ip='$user_ip' AND view_product_id='$kode' AND DATE(view_date)=CURDATE()");
        if($cek_ip->num_rows() <= 0){
            $this->db->trans_start();
				$this->db->query("INSERT INTO tbl_product_views (view_ip,view_product_id) VALUES('$user_ip','$kode')");
				$this->db->query("UPDATE tbl_product SET product_views=product_views+1 where product_id='$kode'");
			$this->db->trans_complete();
			if($this->db->trans_status()==TRUE){
				return TRUE;
			}else{
				return FALSE;
			}
        }
    }

    function show_comments($kode){
    	$query = $this->db->query("SELECT * FROM tbl_comment_product WHERE comment_product_id='$kode' AND comment_status='1' AND comment_parent='0'");
    	return $query;
    }

    function save_comment($product_id,$name,$email,$comment){
    	$data = array(
    		'comment_name' => $name,
    		'comment_email' => $email,
    		'comment_message' => $comment, 
    		'comment_product_id' => $product_id,
    		'comment_image' => 'user_blank.png'
    	);
    	$this->db->insert('tbl_comment_product', $data);
    }

    function search_product($query){
    	$result = $this->db->query("SELECT tbl_product.*,user_name,user_photo FROM tbl_product
			LEFT JOIN tbl_user ON product_user_id=user_id
			LEFT JOIN tbl_category ON product_category_id=category_id
			WHERE product_title LIKE '%$query%' OR category_name LIKE '%$query%' OR product_tags LIKE '%$query%' LIMIT 12");
    	return $result;
    }
}