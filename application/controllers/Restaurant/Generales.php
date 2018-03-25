<?php 
class Generales extends CI_Controller {
	
		public function __construct()
		{	parent::__construct();
			$this->load->model("Restaurant/GeneralesModal");
		}

		public function GetHora(){
			return $this->GeneralesModal->GetHora();
		}
}