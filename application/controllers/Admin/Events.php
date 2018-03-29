<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/EventsModel");
	}

	public function index(){
		
		$this->load->view('Administrador/events');
	}

	public function GetDataEvents(){
		echo json_encode($this->EventsModel->GetAllEvents());
	}

	public function addEvent(){
		$fotos = ['fotoP','fotoS'];
		if(!$this->input->post("title") || !$this->input->post("date") || !$this->input->post("h_i") ||
			!$this->input->post("h_f") || !$this->input->post("det") || !$this->input->post("contenido") ||
			!$this->input->post("motiv")){
				echo "empty";
			}
		else{
			$config['upload_path'] = "./assets/sources/img/events";
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']      = 4000;
            $config['max_height']      = 4000;
			$this->load->library("upload", $config);
			
			for ($i=0; $i < 2 ; $i++) { 
				if(! $this->upload->do_upload($fotos[$i]))
                	$error = array('error' => $this->upload->display_errors());
                else
                	$file[$i] = array('upload_data' => $this->upload->data());
			}

			$info = [
				"titulo" 				=> $this->input->post("title"),
				"fecha" 				=> $this->input->post("date"),
				"hora_in" 				=> $this->input->post("h_i"),
				"hora_fin" 				=> $this->input->post("h_f"),
				"cosas_relevantes"		=> $this->input->post('det'),
				"descripcion"			=> $this->input->post('contenido'),
				"extra_info"			=> $this->input->post('motiv'),
			];
			$fotos[0] = $file[0]['upload_data']['file_name'];
			$fotos[1] = $file[1]['upload_data']['file_name'];
			$this->EventsModel->SetEvent($info,$fotos);

			header('Location: '.base_url('index.php/Admin/Events'));
			}
	}


}
