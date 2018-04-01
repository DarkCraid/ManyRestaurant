<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaModel extends CI_Model {

	public function GetMenu(){
		$this->db->select('*');
		$this->db->from('galeria_tipo');
		$this->db->where('status',1);
		return $this->db->get()->result();
	}

	public function GetPhotos($filtro){
		$this->db->select('*');
		$this->db->from('galeria');
		$this->db->where('status',1);
		if($filtro!=1)
			$this->db->where('tipo_galeria',$filtro);
		return $this->db->get()->result();
	}

}
