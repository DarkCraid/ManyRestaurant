<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chef extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Chefs");
	}

	public function LoadData()
	{
        $Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Chefs->LoadDatas($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataSpecific()
	{
		$data = $this->input->post();
		$Stat = array(
        	'status'	=>	1,
        	'id' => $data['data']
        );

	    $Resul = $this->Chefs->LoadDatas($Stat);
	    echo json_encode($Resul);
	}

}
