<?php
class BlogsModel extends CI_Model{

	function GetCategory(){
		$this->db->select('*');
		$this->db->from('categoria_blog');
		return $this->db->get()->result();
	}

	function GetAllBlogs(){
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('fecha','desc');
		return $this->db->get()->result();
	}
}