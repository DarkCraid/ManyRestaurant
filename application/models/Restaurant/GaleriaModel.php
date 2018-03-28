<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaModel extends CI_Model {

	public function carga1(){
		$this->db->where('tipo','Restaurant');
		$query = $this->db->get('galeria');
		return $query->result();
	}

	public function carga2(){
		$this->db->where('tipo','Comida');
		$query = $this->db->get('galeria');
		return $query->result();
	}

	public function carga3(){
		$this->db->where('tipo','Postres');
		$query = $this->db->get('galeria');
		return $query->result();
	}

	public function insert($data){
		$this->db->insert('galeria',$data);
	}

}
