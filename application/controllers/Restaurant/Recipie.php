<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipie extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Recipies");
		$this->load->model("Restaurant/GeneralesModal");
	}

	public function LoadData()
	{
        $Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Recipies->LoadDatas($Stat);
	    echo json_encode($Resul);
	}

	public function RecipiesDetail()
	{
		$data['IdOb'] = $this->input->post("sendData");
		$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/RecipiesDetail',$data);
	}
	public function LoadDataIdOb()
	{
		$IdOb = $this->input->post("IdOb");
		$Query = array(
        	'id'	=>	$IdOb
        );
        $Resul = $this->Recipies->LoadDataIdObs($Query);
	    echo json_encode($Resul);
	}

}
