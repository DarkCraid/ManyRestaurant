<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarraNav extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Chefs");
	}

	public function index()
	{
		$this->load->view('Administrador/BarraNav');
	}
}
