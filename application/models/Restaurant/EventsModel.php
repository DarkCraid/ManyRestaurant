<?php
class EventsModel extends CI_Model{

	function GetAllEvents(){
		$this->db->select('*');
		$this->db->from('eventos');
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		return $this->db->get()->result();
	}
	function GetEventsAfter($id){
		$this->db->select('*');
		$this->db->from('eventos');
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		$this->db->where('eventos.id >=',$id);
		return $this->db->get()->result();
	}
}