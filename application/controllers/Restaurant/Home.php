<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/HomeModel");
	}

	public function MakeReserv(){
		$data =[
			'nombre' 			=> $this->input->post('name'),
			'email' 			=> $this->input->post('email'),
			'fecha' 			=> $this->input->post('date'),
			'hora' 				=> $this->input->post('time'),
			'telefono'			=> $this->input->post('phone'),
			'invitados'			=> $this->input->post('inv'),
			'req_especiales' 	=> 'none',
		];

		$this->HomeModel->MakeReserv($data);
	}
}
