<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class ReservacionControlador extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Restaurant/ReservacionModel");
		}

		public function guardar(){
			//print_r("TU COLA PINCHE DEREK!!!!!!");
			//echo "TU COLA DERECK";
			
			$nombre			= $this->input->post("Nombre");
			$email 			= $this->input->post("Email");
			$telefono		= $this->input->post("Telefono");
			$fecha			= $this->input->post("Fecha");
			$hora			= $this->input->post("Hora");
			$invitados		= $this->input->post("Invitados");
			$requerimentos 	= $this->input->post("Requerimientos");

			$datos = array(
				"nombre" 			=> $nombre,
				"email"				=> $email,
				"fecha"				=> $fecha,
				"hora"				=> $hora,
				"telefono"			=> $telefono,
				"invitados"			=> $invitados,
				"req_especiales"	=> $requerimentos
			);

			$this->ReservacionModel->guardar($datos);		
			redirect('Restaurante/Reservation','refresh');
			//echo "Reservacion realizada";
		}		
}