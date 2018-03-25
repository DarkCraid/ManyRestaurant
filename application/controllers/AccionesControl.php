<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccionesControl extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model("Restaurant/ReservacionModel");
}

	public function index()
	{
		
	}

	public function cancel($id){
		$this->ReservacionModel->cancelar($id);
		redirect('Administrador/Reservaciones','refresh');
		//asdfasdfsadfsadfadsfasdfasdfasdf
	}
}
