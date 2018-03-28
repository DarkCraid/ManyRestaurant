<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Restaurant/BlogsModel");
	}

	public function index(){
		$data['categorias'] = $this->BlogsModel->GetCategory();
		$this->load->view('Administrador/blogs',$data);
	}

	public function GetDataBlogs(){
		echo json_encode($this->BlogsModel->GetAllBlogs());
	}

	public function addBlog(){
			if ($this->input->is_ajax_request()) 
		{
			if(!$this->input->post("title") || !$this->input->post("date") ||
				!$this->input->post("category") || !$this->input->post("contenido")){
				echo "empty";
			}
			else{
			$config['upload_path'] = "./assets/sources/img/blogs";
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']      = 1024;
            $config['max_height']      = 786;
			$this->load->library("upload", $config);

			if(! $this->upload->do_upload('fotoP'))
	                {
	                	$error = array('error' => $this->upload->display_errors());
	                }

	                else{
	                	$file = array('upload_data' => $this->upload->data());
	                }

	        $info = [
						"titulo" 				=> $this->input->post("title"),
						"fecha" 				=> $this->input->post("date"),
						"id_categoria" 			=> $this->input->post("category"),
						"contenido" 			=> $this->input->post("contenido"),
						"foto" 					=> "assets/sources/img/blogs/".$file['upload_data']['file_name'],
					];

			$this->BlogsModel->SetPost($info);
		}
	}

	}
}
