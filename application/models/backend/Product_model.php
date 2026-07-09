<?php
class Product_model extends CI_Model{
	//BACKEND
	function get_all_product(){
		$result = $this->db->query("SELECT product_id,product_title,product_image,DATE_FORMAT(product_date,'%d %M %Y') AS product_date,category_name,product_tags,product_status,product_views FROM tbl_product JOIN tbl_category ON product_category_id=category_id");
		return $result;
	}

	function get_product_by_id($product_id){
		$result = $this->db->query("SELECT * FROM tbl_product WHERE product_id='$product_id'");
		return $result;
	}

	function save_product($title,$price,$contents,$category,$slug,$image,$tags,$description){
		$data = array(
	        'product_title' 	   => $title,
            'product_price' 	   => $price,
	        'product_description' => $description,
	        'product_contents'    => $contents,
	        'product_image' 	   => $image,
	        'product_category_id' => $category,
	        'product_tags' 	   => $tags,   
	        'product_slug' 	   => $slug,
	        'product_status' 	   => 1,
	        'product_user_id'	   => $this->session->userdata('id')
		);
		$this->db->insert('tbl_product', $data);
	}

	function edit_product_with_img($id,$title,$price,$contents,$category,$slug,$image,$tags,$description){
		$result = $this->db->query("UPDATE tbl_product SET product_title='$title',product_price='$price',product_description='$description',product_contents='$contents',product_image='$image',product_last_update=NOW(),product_category_id='$category',product_tags='$tags',product_slug='$slug' WHERE product_id='$id'");
		return $result;
	}

	function edit_product_no_img($id,$title,$price,$contents,$category,$slug,$tags,$description){
		$result = $this->db->query("UPDATE tbl_product SET product_title='$title',product_price='$price',product_description='$description',product_contents='$contents',product_last_update=NOW(),product_category_id='$category',product_tags='$tags',product_slug='$slug' WHERE product_id='$id'");
		return $result;
	}

	function delete_product($product_id){
		$this->db->where('product_id', $product_id);
		$this->db->delete('tbl_product');
	}
	
	//END BACKEND

}