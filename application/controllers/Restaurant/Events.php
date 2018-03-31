<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');
require_once APPPATH.'controllers/Restaurant/Generales.php';
class Events extends Generales {
	
		public function __construct()
		{	parent::__construct();
			$this->load->model("Restaurant/EventsModel");
		}

		public function index()
		{	$data['events']	= 	$this->EventsModel->GetAllEvents();
			$data['pager'] 	=	array('uno' => "1 - 3",'dos' => '4 - 6', 'tres' => '7 - 9');
			$data['time']	=	$this->GetHora();
			$this->load->view('FrontEnd/Event',$data);
		}

		public function changePage(){
			$fromPage 		=	$this->input->post('dataPageF');
			$fromPage = json_decode($fromPage,true);
			$data['pager'] 	=	array('uno' => $fromPage['uno']." - ".((int)$fromPage['uno']+2),
				'dos' => $fromPage['dos']." - ".((int)$fromPage['dos']+2), 
				'tres' => $fromPage['tres']." - ".((int)$fromPage['tres']+2));
			$data['events']	= 	$this->EventsModel->GetEventsAfter($fromPage['uno']);
			$data['time']	=	$this->GetHora();
			$this->load->view('FrontEnd/Event',$data);
		}

		public function EvDetail(){
			$idActual		=	$this->input->post('idToFind');
			$data['event']	=	$this->EventsModel->GetEvent($idActual);
			$data['time']	=	$this->GetHora();
			//$idNext=$idActual+1;
			
			$idNext 		=	$this->EventsModel->getNextID($idActual);
			if(count($idNext)>0)
				$idNext 		=   $idNext[0]->id;
			else
				$idNext=1;
			
			if($idActual>1){
				$idActual = $this->EventsModel->GetPrevId($idActual);
				$idActual = $idActual[0]->id;
			}
			else{
				$idActual = $this->EventsModel->getLastID();
				$idActual = $idActual[0]->id;
			}
			$data['idFind'] 	= 	array('idprev' => $idActual, 'idnext'=>$idNext);
			$data['featuredEv']	=	$this->EventsModel->GetFeaturedEvents();
			$this->load->view('FrontEnd/EventDetail',$data);
		}
}
