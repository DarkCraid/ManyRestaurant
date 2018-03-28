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
		$data['key'] = $this->AboutUsModel->check();
		if(!empty($data['key']) ){
			//print_r($data);
			$this->load->view('Administrador/NosotrosActualizar',$data);
		}else{
			$data['key'] = (object)array(
				"id"		=> null,
				"titulo" 	=> null,
				"contenido" 	=> null,
				"foto"		=> null
			);
			//print_r($data);
			$this->load->view('Administrador/NosotrosActualizar',$data);
		}
	}

	public function do_upload()
	{

		$id 		= $this->input->post('id');
		$titulo 	= $this->input->post("titulo");
		$contenido	= $this->input->post("contenido");

		$config['upload_path']	= './assets/sources/img';
        $config['allowed_types']= 'gif|jpg|png';

        $this->load->library('upload', $config);

        if( !$this->upload->do_upload('userFile') ){
        	$data = "defaultRest.jpg";
        	$datos = array (
        		"id"		=> $id,
        		"titulo" 	=> $titulo,
        		"contenido" => $contenido,
        		"foto"		=> $data
        	);
        	$this->AboutUsModel->insert($datos);
        	redirect('Admin/NosotrosActualizar','refresh');
        }else{
        	$data = array('upload_data' => $this->upload->data() );
        	$datos = array(
        		"id"		=> $id,
        		"titulo"	=> $titulo,
        		"contenido"	=> $contenido,
        		"foto"		=> $data['upload_data']['file_name']
        	);
        }
        	$this->AboutUsModel->insert($datos);
        	redirect('Admin/NosotrosActualizar','refresh');
	}

}
