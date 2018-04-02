<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipies extends CI_Model 
{
	public function LoadDatas($Stat)
	{
		$this->db->select('*');
		$this->db->from('recetas');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function LoadDataIdObs($Query)
	{
		$this->db->select('*');
		$this->db->from('recetas');
		$this->db->where($Query);
		return $this->db->get()->result();
	}
	public function SaveDatas($theInsert)
	{
		$this->db->insert("recetas", $theInsert);		
		if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}
