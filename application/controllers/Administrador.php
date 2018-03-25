<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/ReservacionModel");
		$this->load->model("Restaurant/ContactoModel");
	}

	public function index()
	{
		$this->load->view('Administrador/Inicio');		
	}
	public function Error404()
	{
		$this->load->view('Administrador/Error/Error404');
	}
	public function Error500()
	{
		$this->load->view('Administrador/Error/Error500');
	}
	public function Registro()
	{
		$this->load->view('Administrador/Registro');
	}
	public function CambiarContrasena()
	{
		$this->load->view('Administrador/CambiarContrasena');
	}

	public function Reservaciones()
	{
		$data['key'] = $this->ReservacionModel->mostrarReservaciones();		
		$this->load->view('Administrador/Reservaciones', $data);
	}

	public function Contacto()
	{
		$data['key'] = $this->ContactoModel->mostrarMensaje();
		$this->load->view('Administrador/MensajesContacto',$data);
	}
}
