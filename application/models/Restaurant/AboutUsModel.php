<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUsModel extends CI_Model {


	public function Carga(){
		$this->db->select('historia, foto');
		$this->db->from('datos_restaurante, fotos_restaurante');
		$this->db->where('fotos_restaurante.tipo',1);
		return $this->db->get()->result();
	}

	public function GetCooks(){
		$this->db->select('*');
		$this->db->from('chefs');
		return $this->db->get()->result();
	}

	public function check(){

		$query = $this->db->query('SELECT * FROM datos_restaurante WHERE EXISTS (SELECT id FROM datos_restaurante WHERE id = 1)')->row();
		return $query;
	}

	public function SetAboutUs($data){
		$this->db->set($data);
		$this->db->where('id',1);
		$this->db->update('datos_restaurante');
	}

	public function GetPhotos(){
		
	}

}
