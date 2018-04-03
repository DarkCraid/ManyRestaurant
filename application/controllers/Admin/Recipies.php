<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipies extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Recipiee");
	}

	public function index()
	{
		$this->load->view('Administrador/Recipies');
	}
	public function SaveData()
	{
	if ($this->input->is_ajax_request()) 
    {
      $txtTitulo = $this->input->post("txtTitulo");
      $txtDescripcion = $this->input->post("txtDescripcion");

      $txtPre = $this->input->post("txtPre");
      $txtCoc = $this->input->post("txtCoc");

      $cmbSeccion = $this->input->post("cmbSeccion");


      $Ingredientes = $this->input->post("Ingredientes");
      $Pasos = $this->input->post("Pasos");


        
          $config['upload_path'] = "./assets/uploads/recetas/";
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
              "titulo" => $txtTitulo,
              "preparacion" => $txtPre,
              "termino" => $txtCoc,
              "descripcion" => $txtDescripcion,
              "ingredientes" =>$Ingredientes,
              "id_tipo" =>$cmbSeccion,
              "foto" => $Data_icon['upload_data']['file_name'],
              "status" => 1,
            ];

            if ($this->Recipiee->SaveDatas($theInsert,$Pasos) == true) 
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
