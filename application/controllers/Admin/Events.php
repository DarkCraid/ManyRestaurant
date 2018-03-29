<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/EventsModel");
	}

	public function index(){
		
		$this->load->view('Administrador/events');
	}

	public function GetDataEvents(){
		echo json_encode($this->EventsModel->GetAllEvents());
	}


}
