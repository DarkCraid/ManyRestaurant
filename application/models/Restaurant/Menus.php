<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Model 
{
	public function LoadDatas($Stat)
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataMenus($Stat)
	{
		$this->db->select('*');
		$this->db->from('tipo_alimento');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}

}
