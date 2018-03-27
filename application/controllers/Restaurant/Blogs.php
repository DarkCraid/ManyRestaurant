<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');
require_once APPPATH.'controllers/Restaurant/Generales.php';
class Blogs extends Generales {
	
		public function __construct()
		{	parent::__construct();
			$this->load->model("Restaurant/BlogsModel");
		}

		public function index()
		{	$data['category'] 	=	$this->BlogsModel->GetCategory();
			$data['blogs'] 		=	$this->BlogsModel->GetAllBlogs();
			$data['time']	=	$this->GetHora();
			$this->load->view('FrontEnd/Blog',$data);
		}
}
