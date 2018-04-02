<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chefs extends CI_Model 
{
	public function LoadDatas($Stat)
	{
		$this->db->select('*');
		$this->db->from('chefs');
		$this->db->where($Stat);
		return $this->db->get()->result();
	}
	public function SaveDatas($theInsert)
	{
		$this->db->insert("chefs", $theInsert);		
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
