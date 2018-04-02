<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarraNav extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Menus");
	}

	public function index()
	{
		$this->load->view('Administrador/BarraNav');
	}
	public function SaveData()
	{
	if ($this->input->is_ajax_request()) 
    {
      //----- comienza el ingreso
      $txtSection = $this->input->post("txtNombre");

        
          $config['upload_path'] = "./assets/uploads/icons/";
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
              "tipo" => $txtSection,
              "icono" => $Data_icon['upload_data']['file_name'],
              "status" => 1,
            ];

            if ($this->Menus->SaveDatas($theInsert) == true) 
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
