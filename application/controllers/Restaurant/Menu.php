<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function __construct()
	{	parent::__construct();
		$this->load->model("Restaurant/Menus");
	}

	public function LoadData()
	{
        $Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Menus->LoadDatas($Stat);
	    echo json_encode($Resul);
	}
	public function LoadDataMenu()
	{
		$Stat = array(
        	'status'	=>	1
        );

	    $Resul = $this->Menus->LoadDataMenus($Stat);
	    echo json_encode($Resul);
	}

	public function RemoveItem()
	{
		$data = $this->input->post();
		$Stat = array(
        		'id'				=> 	$data['IdOb'],
        );
		if ($this->Menus->RemoveItems($Stat) == true) 
            {
              echo "Item Removido";
            }
            else
            {
              echo "Item no Removido";
            }
	}

}
