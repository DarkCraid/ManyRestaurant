<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurante extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/GeneralesModal");
		$this->load->model("Restaurant/GaleriaModel");
		$this->load->model("Restaurant/HomeModel");
		$this->load->model("Restaurant/ReservacionModel");
	}

	public function index()
	{	$data['time'] 			= $this->GeneralesModal->GetHora();
		$data['menu'] 			= $this->HomeModel->GetMenu();
		$data['Espe'] 			= $this->HomeModel->GetEspecialidad();
		$data['clientes']		= $this->HomeModel->GetHappy();
		$data['gallery']		= $this->HomeModel->GetGallery();
		$data['restaurante']	= $this->HomeModel->GetDatosRestaurante();
		$this->load->view('FrontEnd/Home',$data);
	}

	/*public function Home()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$data['menu'] = $this->HomeModel->GetMenu();
		$data['Espe'] = $this->HomeModel->GetEspecialidad();
		$this->load->view('FrontEnd/Home',$data);
	}*/
	public function Menu()
	{
		$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Menu',$data);
	}
	public function Recipies()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Recipies',$data);
	}
	public function Chef()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Chef',$data);
	}
	public function ContactUs()
	{	$data['restaurante'] = $this->GeneralesModal->GetInfoRestaurant();
		$this->load->view('FrontEnd/ContactUs',$data);
	}


	public function Gallery()
	{	$data['galeria']	= $this->GaleriaModel->GetMenu();
		$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Gallery',$data);
	}
	public function Reservation()
	{
		$data['restaurante'] 	= $this->GeneralesModal->GetInfoRestaurant();
		$data['reserv']			= $this->ReservacionModel->reservaciones_especiales();
		$data['time']	 		= $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Reservation',$data);
	}

}
