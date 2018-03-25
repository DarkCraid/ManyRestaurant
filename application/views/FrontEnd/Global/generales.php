<?php 
	function GetHora($hora){
		$h =	((int)substr($hora,0,2));
		return	(((int)$h>12)? 
				$hora=((int)$h-12).substr($hora,2,3).' PM' : $hora=$h.substr($hora,2,3).' AM');
	}

	function GetFechaV($fehca){
		$date= 	'<strong>'. substr($fehca,8,strlen($fehca)) .'</strong>';
		$dt = DateTime::createFromFormat('!m', substr($fehca,5,2));
		$dt = $dt->format('F');
		$date.= '<p>'. substr($dt,0,3) .'<br>'. substr($fehca,0,4).'</p>';
		return $date;		
	}


?>