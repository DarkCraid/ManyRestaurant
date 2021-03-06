<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model 
{
	public function GetMenu(){
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('status',1);
		return $this->db->get()->result();
	}
	public function GetEspecialidad(){
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where('menu.status',1);
		$this->db->join('especialidad_dia','id_menu = menu.id','left');
		return $this->db->get()->result();
	}

	public function MakeReserv($data){
		$this->db->insert('reservaciones', $data);
	}

	public function GetHappy(){
		$this->db->select('*');
		$this->db->from('comentarios_clientes');
		$this->db->where('status',1);
		return $this->db->get()->result();
	}

	function GetGallery(){
		$this->db->select('foto');
		$this->db->from('blog, eventos');
		$this->db->limit(10);
		return $this->db->get()->result();
	}

	function GetDatosRestaurante(){
		$this->db->select('*');
		$this->db->from('datos_restaurante');
		return $this->db->get()->result();
	}
}
