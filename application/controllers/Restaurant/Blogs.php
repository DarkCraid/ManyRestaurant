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
			$data['blogsC']		=	$this->BlogsModel->recentPost();
			$data['pager'] 	=	array('uno' => "1 - 3",'dos' => '4 - 6', 'tres' => '7 - 9');
			$data['time']	=	$this->GetHora();
			$this->load->view('FrontEnd/Blog',$data);
		}

		public function MoreDetails(){
			$idActual			=	$this->input->post('idToFind');
			$data['blogs'] 		=	$this->BlogsModel->GetAllBlogs();
			$data['category'] 	=	$this->BlogsModel->GetCategory();
			$data['blog']		=	$this->BlogsModel->GetBlogById($idActual);
			$data['blogsC']		=	$this->BlogsModel->recentPost();
			$idNext=$idActual+1;
			if($idActual>1)
				$idActual-=1;
			else
				$idActual=1;
			$data['idFind'] 	= 	array('idprev' => $idActual, 'idnext'=>$idNext);
			$this->load->view('FrontEnd/BlogDetail',$data);
		}

		public function ChangeCategory(){
			$idActual			=	$this->input->post('idToChange');
			$data['blogs'] 		=	$this->BlogsModel->ChangeCategory($idActual);
			$data['category'] 	=	$this->BlogsModel->GetCategory();
			$data['blogsC']		=	$this->BlogsModel->recentPost();
			$data['pager'] 	=	array('uno' => "1 - 3",'dos' => '4 - 6', 'tres' => '7 - 9');
			$this->load->view('FrontEnd/Blog',$data);
		}

		public function changePage(){
			$fromPage 		=	$this->input->post('dataPageF');
			$fromPage = json_decode($fromPage,true);
			$data['pager'] 	=	array('uno' => $fromPage['uno']." - ".((int)$fromPage['uno']+2),
				'dos' => $fromPage['dos']." - ".((int)$fromPage['dos']+2), 
				'tres' => $fromPage['tres']." - ".((int)$fromPage['tres']+2));
			$data['blogs']	= 	$this->BlogsModel->GetAllBlogsAfter($fromPage['uno']);
			$data['category'] 	=	$this->BlogsModel->GetCategory();
			$data['time']	=	$this->GetHora();
			$data['blogsC']		=	$this->BlogsModel->recentPost();
			$this->load->view('FrontEnd/Blog',$data);
		}
}
