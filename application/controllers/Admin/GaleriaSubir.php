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

	public function do_upload()
	{
		$tipo	= $this->input->post('Tipo');

		$config['upload_path']	= './assets/sources/img/galeria/'.$tipo;
		$config['allowed_types']= 'gif|jpg|png';

		$this->load->library('upload',$config);
		if( !$this->upload->do_upload('userFile')){
			$data['nombre'] 	= "defaultRest.jpg";
			$this->GaleriaModel->insert($data);
			redirect('Admin/GaleriaSubir','refresh');
		}else{
			$data = array('upload_data' => $this->upload->data() );
			$datos =array(
				"nombre" => $data['upload_data']['file_name'],
				"tipo"	 => $tipo
			);
		}
		$this->GaleriaModel->insert($datos);
		redirect('Admin/GaleriaSubir','refresh');
	}

}
