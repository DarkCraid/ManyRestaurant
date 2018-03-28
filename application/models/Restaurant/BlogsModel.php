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

	function GetBlogById($id){
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('blog.id',$id);
		return $this->db->get()->result();
	}

	function ChangeCategory($id){
		$stat = array('selected' => 'none');
        $this->db->set($stat);
        $this->db->update('categoria_blog'); 
        $stat = array('selected' => 'activo');
        $this->db->set($stat);
        $this->db->where('id',$id);
        $this->db->update('categoria_blog'); 

		$this->db->select('blog.id, blog.titulo, contenido, fecha, foto');
		$this->db->from('blog');
		$this->db->join('categoria_blog','blog.id_categoria = categoria_blog.id', 'left');
		if($id!=1)
			$this->db->where('blog.id_categoria',$id);
		return $this->db->get()->result();
	}

	function SetPost($data){
		$this->db->insert('blog', $data);
	}
}