<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurante extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/GeneralesModal");
		$this->load->model("Restaurant/GaleriaModel");
	}

	public function index()
	{
		$this->load->view('FrontEnd/Home');
	}

	public function Home()
	{
		$this->load->view('FrontEnd/Home');
	}
	public function Menu()
	{
		$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Menu',$data);
	}
	public function Recipies()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Recipies',$data);
	}
	public function RecipiesDetail()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/RecipiesDetail',$data);
	}
	public function Chef()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Chef',$data);
	}
	public function ContactUs()
	{
		$this->load->view('FrontEnd/ContactUs');
	}

	public function Gallery()
	{
		$data['galeria'] = $this->GaleriaModel->carga();
		$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Gallery',$data);
	}
	public function Reservation()
	{

		$datos['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Reservation',$datos);
	}
}
