<?php
class GeneralesModal extends CI_Model{
	
	function GetHora(){
		$this->db->select('hi_lv,hi_sd,hf_lv,hf_sd');
		$this->db->from('datos_restaurante');
		return $this->db->get()->result();
	}

	function GetInfoRestaurant(){
		$this->db->select('*');
		$this->db->from('datos_restaurante');
		return $this->db->get()->result();
	}

}