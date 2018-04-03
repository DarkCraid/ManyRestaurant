<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NosotrosActualizar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant/AboutUsModel');
	}

	public function index()
	{
		$data['key'] 		= $this->AboutUsModel->check();
		$data['historia']	= $this->AboutUsModel->Carga();
		$data['fotos']		= $this->AboutUsModel->GetPhotos();
		if(!empty($data['key']) ){
			$this->load->view('Administrador/NosotrosActualizar',$data);
		}else{
			$data['key'] = (object)array(
				"h_lunes_viernes"		=> null,
				"h_sabado_domingo" 		=> null,
				"address" 				=> null,
				"telefono"				=> null,
				"email"					=> null,
				"historia"				=> null,
				"video"					=> null
			);
			//print_r($data);
			$this->load->view('Administrador/NosotrosActualizar',$data);
		}
	}

	public function do_upload()
	{

		$id 		= $this->input->post('id');
		$data = [
			'address' 	=>	$this->input->post('adrres'),
			'telefono'	=>	$this->input->post('phone'),
			'email'		=>	$this->input->post('email'),
			'historia'	=>	$this->input->post('history'),
			'hi_lv'		=>	$this->input->post('hi_lv'),
			'hf_lv'		=>	$this->input->post('hf_lv'),
			'hi_sd'		=>	$this->input->post('hi_sd'),
			'hf_sd'		=>	$this->input->post('hf_sd')
		];
    	$this->AboutUsModel->SetAboutUs($data,$this->input->post('photo'));
    	redirect('Admin/NosotrosActualizar','refresh');
	}

}
