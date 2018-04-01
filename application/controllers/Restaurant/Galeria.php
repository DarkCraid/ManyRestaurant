<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/GaleriaModel");
	}
	
	public function GetFotos(){
		echo json_encode($this->GaleriaModel->GetPhotos($this->input->post('filtro')));
	}

}
