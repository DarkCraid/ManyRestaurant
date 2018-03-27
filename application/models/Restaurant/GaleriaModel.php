<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaModel extends CI_Model {

	public function carga(){
		$query = $this->db->get('galeria');
		return $query->result();
	}

	public function guardar(){
		
	}

}
