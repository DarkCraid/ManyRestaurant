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

		$query = $this->db->query('SELECT * FROM nuestrahistoria WHERE EXISTS (SELECT id FROM nuestrahistoria WHERE id = 1)')->row();
		//print_r($query);
		return $query;
	}

	public function insert($data){
		print_r($data['id']);

		if ($data['id'] == 1 ){
			$this->db->set('titulo',$data['titulo']);
			$this->db->set('contenido',$data['contenido']);
			$this->db->set('foto',$data['foto']);
			$this->db->where('id','1');
			$this->db->update('nuestrahistoria');
		}else{
			$this->db->insert('nuestrahistoria',$data);
		}
	}

}
