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

	public function GetAllCategories(){
		echo json_encode($this->GaleriaModel->GetAdminGallery());
	}

	public function ChangeStatus(){
		$idCat	=	$this->input->post('idCat');
		$status	=	$this->input->post('status');
		(($status=="lock")? $status=0:$status=1);
		$this->GaleriaModel->ChangeStatus($idCat,$status);
		echo $status;
	}

	public function AddCategory(){
		$category	=	$this->input->post('category');
		$folder		=	$this->input->post('fol');

		$config['upload_path'] = "./assets/sources/icons/gallery";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_width']      = 4000;
        $config['max_height']      = 4000;
        mkdir("./assets/uploads/".$folder, 0777);

			$this->load->library("upload", $config);

			if(! $this->upload->do_upload('icon'))
            	$error = array('error' => $this->upload->display_errors());
            else
            	$file = array('upload_data' => $this->upload->data());
        $data = [
        	'categoria' =>	$category,
        	'icono' 	=>	$file['upload_data']['file_name'],
        	'default'	=>	0,
        	'folder'	=>	$folder
        ];

		$this->GaleriaModel->AddCategory($data);
		redirect('Admin/GaleriaSubir','refresh');
	}

	public function AddPhoto(){
		$config['upload_path'] 		= "./assets/uploads/".$this->input->post('folder');
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_width']      	= 4000;
        $config['max_height']      	= 4000;

			$this->load->library("upload", $config);

			if(! $this->upload->do_upload('photo'))
            	$error = array('error' => $this->upload->display_errors());
            else
            	$file = array('upload_data' => $this->upload->data());
        $data = [
        	'rutaName' =>	'assets/uploads/'.$this->input->post('folder').'/'.$file['upload_data']['file_name'],
        	'tipo_galeria'	=>	$this->input->post('idCategory')
        ];

		$this->GaleriaModel->AddPhoto($data);
		redirect('Admin/GaleriaSubir','refresh');
	}

}
