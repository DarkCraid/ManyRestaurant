<?php
class ReservacionModel extends CI_Model{

	function guardar($data){
		$this->db->insert('reservaciones',$data);
	}

	function mostrarReservaciones($data){
		
	}
}