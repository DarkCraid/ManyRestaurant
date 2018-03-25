<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurante extends CI_Controller 
{
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
	public function EventDetail()
	{
		$this->load->view('FrontEnd/EventDetail');
	}
	public function Recipies()
	{
		$this->load->view('FrontEnd/Recipies');
	}
	public function RecipiesDetail()
	{
		$this->load->view('FrontEnd/RecipiesDetail');
	}
	public function Blog()
	{
		$this->load->view('FrontEnd/Blog');
	}
	public function BlogDetail()
	{
		$this->load->view('FrontEnd/BlogDetail');
	}
	public function AboutUs()
	{
		$this->load->view('FrontEnd/AboutUs');
	}
	public function Chef()
	{
		$this->load->view('FrontEnd/Chef');
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
		$this->load->view('FrontEnd/Reservation');
	}
}
