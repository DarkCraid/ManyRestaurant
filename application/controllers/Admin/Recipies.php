<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipies extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Chefs");
	}

	public function index()
	{
		$this->load->view('Administrador/Recipies');
	}
	public function SaveData()
	{
	if ($this->input->is_ajax_request()) 
    {
      $txtNombre = $this->input->post("txtNombre");
      $txtPuesto = $this->input->post("txtPuesto");
      $txtDescripcion = $this->input->post("txtDescripcion");

        
          $config['upload_path'] = "./assets/uploads/chefs/";
          $config['allowed_types'] = "jpg|png";

          $this->load->library("upload", $config);

          if (!$this->upload->do_upload('fileEvidencia')) 
          {
            
            if (!empty($_FILES['fileEvidencia']['name'])) 
            {
                  echo $this->upload->display_errors();
            } 
          }
          else
          {
            $Data_icon = array('upload_data' => $this->upload->data());

            $theInsert = [
              "nombre" => $txtNombre,
              "puesto" => $txtPuesto,
              "descripcion" => $txtDescripcion,
              "foto" => $Data_icon['upload_data']['file_name'],
              "status" => 1,
            ];

            if ($this->Chefs->SaveDatas($theInsert) == true) 
            {
              echo "Exito";
            }
            else
            {
              echo "Error segundo";
            }
          }  

    }
    else
    {show_404();}
	}
}
