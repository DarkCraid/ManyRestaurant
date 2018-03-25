<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoControl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant/ContactoModel');
	}

	public function index()
	{
		
	}

	public function guardar(){
		$nombre		= $this->input->post("Nombre");
		$email  	= $this->input->post("Email");
		$mensaje	= $this->input->post("Mensaje");

		$datos = array(
			"nombre" 	=> $nombre,
			"email"		=> $email,
			"mensaje" 	=> $mensaje
		);

		$this->ContactoModel->guardar($datos);
		redirect('Restaurante/ContactUs','refresh');
	}	
}
