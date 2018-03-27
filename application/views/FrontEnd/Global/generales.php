<?php 
	function GetHora($hora){
		$h =	((int)substr($hora,0,2));
		return	(((int)$h>12)? 
				$hora=((int)$h-12).substr($hora,2,3).' PM' : $hora=$h.substr($hora,2,3).' AM');
	}

	function GetFechaV($fecha){
		$date= 	'<strong>'. substr($fecha,8,strlen($fecha)) .'</strong>';
		$dt = DateTime::createFromFormat('!m', substr($fecha,5,2));
		$dt = $dt->format('F');
		$date.= '<p>'. substr($dt,0,3) .'<br>'. substr($fecha,0,4).'</p>';
		return $date;		
	}

	function GetFechaH($fecha){
		$date= 	substr($fecha,8,strlen($fecha)) .' - ';
		$dt = DateTime::createFromFormat('!m', substr($fecha,5,2));
		$dt = $dt->format('F');
		$date.= substr($dt,0,3) .' - '. substr($fecha,0,4);
		return $date;
	}

	function GetFechaV2($fecha){
		$date= 	'<strong>'.substr($fecha,8,strlen($fecha)).'</strong>';
		$dt = DateTime::createFromFormat('!m', substr($fecha,5,2));
		$dt = $dt->format('F');
		$date.= '<p>'. substr($dt,0,3) .'-'. substr($fecha,0,4).'</p>';
		return $date;
	}


?>