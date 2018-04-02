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
	public function SaveDatas($theInsert)
	{
		$this->db->insert("tipo_alimento", $theInsert);		
		if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function SaveDatasComidas($theInsert)
	{
		$this->db->insert("menu", $theInsert);		
		if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function GetTipos($Stat)
	{
  	$this->db->where($Stat);
  	return $this->db->get('tipo_alimento')->result();
	//return $this->db->get('tipo_alimento')->result();
  	}

}
