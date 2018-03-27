<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaSubir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant/GaleriaModel');
	}

	public function index()
	{
		$this->load->view("Administrador/GaleriaSubir");
	}

}

/* End of file GaleriaSubir.php */
/* Location: ./application/views/Administrador/GaleriaSubir.php */
