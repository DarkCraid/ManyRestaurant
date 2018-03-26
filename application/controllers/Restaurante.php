<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurante extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/GeneralesModal");
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
		$this->load->view('FrontEnd/Menu');
	}
	public function Recipies()
	{
		$this->load->view('FrontEnd/Recipies');
	}
	public function RecipiesDetail()
	{	$data['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/RecipiesDetail',$data);
	}
	public function Blog()
	{
		$this->load->view('FrontEnd/Blog');
	}
	public function BlogDetail()
	{
		$this->load->view('FrontEnd/BlogDetail');
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
		$this->load->view('FrontEnd/Gallery');
	}
	public function Reservation()
	{

		$datos['time'] = $this->GeneralesModal->GetHora();
		$this->load->view('FrontEnd/Reservation',$datos);
	}
}
