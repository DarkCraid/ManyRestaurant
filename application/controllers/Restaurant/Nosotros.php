<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Restaurant/Generales.php';

class Nosotros extends Generales {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant/AboutUsModel');
	}

	public function index()
	{
		$data['time']	= $this->GetHora();
		$data['llave']	= $this->AboutUsModel->Carga();
		$this->load->view('FrontEnd/AboutUs',$data);
	}

}
