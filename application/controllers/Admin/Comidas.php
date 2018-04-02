<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comidas extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Menus");
	}

	public function index()
	{
		$this->load->view('Administrador/Comidas');
	}

		public function SaveData()
	{
	if ($this->input->is_ajax_request()) 
    {
      //----- comienza el ingreso
      $txtNombre = $this->input->post("txtNombre");
      $txtPrecio = $this->input->post("txtPrecio");
      $cmbSeccion = $this->input->post("cmbSeccion");
      $txtDescripcion = $this->input->post("txtDescripcion");

        
          $config['upload_path'] = "./assets/uploads/food/";
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
              'nombre' => $txtNombre,
              'precio' => $txtPrecio,
              "tipo" => $cmbSeccion,
              'descripcion' => $txtDescripcion,
              "imagen" => $Data_icon['upload_data']['file_name'],
              "status" => 1,
            ];

            if ($this->Menus->SaveDatasComidas($theInsert) == true) 
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

  public function GetTipo()
  { 
    $Stat = array(
          'status'  =>  1
        );
    $Result = $this->Menus->GetTipos($Stat);
    echo json_encode($Result);
  }

}
