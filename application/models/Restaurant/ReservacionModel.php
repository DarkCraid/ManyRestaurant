<?php
class ReservacionModel extends CI_Model{

	function guardar($data){
		$this->db->insert('reservaciones',$data);
	}

	function mostrarReservaciones(){		
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('reservaciones');
		return $query->result();
	}

	function cancelar($id){		
		$data = array(
			'status' => '0'
		);
		$this->db->where('id',$id);
		$this->db->update('reservaciones',$data);
	}

	function reservaciones_especiales(){
		$this->db->select('descripcion, titulo, foto');
		$this->db->from('reservaciones_especiales');
		$this->db->join('fotos_restaurante',
			'fotos_restaurante.id = reservaciones_especiales.id_img_restaurante','left');
		return $this->db->get()->result();
	}
}