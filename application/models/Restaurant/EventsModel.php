<?php
class EventsModel extends CI_Model{

	function GetAllEvents(){
		$this->db->select('eventos.id as id, titulo, descripcion, fecha, hora_in, hora_fin, extra_info, foto');
		$this->db->from('eventos');
		$this->db->where('eventos.status',1);
		$this->db->where('fotos_eventos.principal',1);
		$this->db->order_by('eventos.id');
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		return $this->db->get()->result();
	}
	function GetEventsAfter($id){
		$this->db->select('eventos.id as id, titulo, descripcion, fecha, hora_in, hora_fin, extra_info, foto');
		$this->db->from('eventos');
		$this->db->where('eventos.status',1);
		$this->db->where('fotos_eventos.principal',1);
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		$this->db->where('eventos.id >=',$id);
		return $this->db->get()->result();
	}

	function GetEvent($id){
		$this->db->select('eventos.id, titulo, descripcion ,cosas_relevantes ,fecha ,hora_in ,hora_fin, extra_info, GROUP_CONCAT(foto) AS foto');
		$this->db->from('eventos');
		$this->db->where('eventos.status',1);
		$this->db->where('eventos.id',$id);
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		$this->db->limit(1);
		return $this->db->get()->result();
	}

	function GetFeaturedEvents(){
		$this->db->select('eventos_destacados.id AS id, titulo, descripcion, fecha, hora_in, hora_fin, extra_info, foto, principal, eventos_id');
		$this->db->from('eventos_destacados');
		$this->db->join('eventos','eventos_destacados.id_evento = eventos.id','left');
		$this->db->join('fotos_eventos','fotos_eventos.eventos_id = eventos.id','left');
		$this->db->where('fotos_eventos.principal',1);
		$this->db->order_by('eventos.fecha','desc');
		return $this->db->get()->result();
	}

	function SetEvent($data,$fotos){
		$this->db->insert('eventos', $data);
		$insert_id = $this->db->insert_id();

		$fotoP = ["foto" => "assets/sources/img/events/".$fotos[0],
			"eventos_id" => $insert_id,
		];

		$fotoS = ["foto" => "assets/sources/img/events/".$fotos[1],
			"eventos_id" => $insert_id,
			"principal"  => 0,
		];

		$this->db->insert('fotos_eventos', $fotoP);
		if($fotos[1])
			$this->db->insert('fotos_eventos', $fotoS);

	}

	function getNextID($id){
		$this->db->select('id');
		$this->db->from('eventos');
		$this->db->where('id >',$id);
		$this->db->limit(1);
		return $this->db->get()->result();
	}

	function getLastID(){
		$this->db->select('id');
		$this->db->from('eventos');
		$this->db->order_by('id','desc');
		$this->db->limit(1);
		return $this->db->get()->result();
	}

	function changeFeatured($idFrom,$idTo){
		$stat = array('id_evento' => $idFrom);
        $this->db->set($stat);
        $this->db->where('id',$idTo);
        $this->db->update('eventos_destacados');
	}

	function GetAllEventsFeatured(){
		$this->db->select('eventos.id AS id, titulo');
		$this->db->from('eventos');
		$this->db->where('eventos.id NOT IN(SELECT id_evento FROM eventos_destacados)');
		$this->db->where('eventos.status',1);
		$this->db->order_by('eventos.id');
		return $this->db->get()->result();
	}

	function DeleteEvent($id){
		$this->db->set("status",0);
		$this->db->where("id",$id);
		$this->db->update("eventos");
	}
}