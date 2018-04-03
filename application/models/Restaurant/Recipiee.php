<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipiee extends CI_Model 
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
	public function LoadDataIdObsPasos($Query)
	{
		$this->db->select('*');
		$this->db->from('pasos_receta');
		$this->db->where($Query);
		return $this->db->get()->result();
	}
	public function SaveDatas($theInsert,$DataBrutaPasos)
	{
		$this->db->insert("recetas", $theInsert);
		$id_r = $this->db->insert_id();		
		if ($this->db->affected_rows() > 0) 
		{
			
			$DataBrutaPasos = explode(",", $DataBrutaPasos);

			 for ($i=0; $i <count($DataBrutaPasos) ; $i++) { 
			 	$insertPasos = [
			 		'orden'=>$i+1,
			 		'pasos'=>$DataBrutaPasos[$i],
			 		'id_receta'=>$id_r,
			 		'status'=>1,
			 	];
			 	$this->db->insert("pasos_receta", $insertPasos);
			 }
			
			return true;
		}
		else
		{
			return false;
		}
	}

}
