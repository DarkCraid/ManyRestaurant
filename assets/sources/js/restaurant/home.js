var base_url = window.location.origin+'/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
});


$('#makeRev').click(function(){
	let correct	=	true;
	var here	=	[];

	if(!$('#i-name').val()){	here.push('Name is empty');correct = false;	}
	if(!$('#i-email').val()){	here.push('Email is empty');correct = false;	}
	if(!$('#i-time').val()){	here.push('Time is empty');correct = false;	}
	if(!$('#i-date').val()){	here.push('Date is empty');correct = false;	}
	if(!$('#i-phone').val()){	here.push('Phone is empty');correct = false;	}

	if(!correct){
		cleanBotonesModal(true);
		var cont='';
		for (var i = 0; i < here.length; i++) {
			cont +='<strong>'+here[i]+'</strong><br><br>';
		}
		modal(BootstrapDialog.TYPE_DANGER,'ERROR',cont,true);
	}
	else
		ajaxPost('Home/MakeReserv');
});

function ajaxPost(ruta){
	$.post(base_url+ruta,{
		'name': 	$('#i-name').val(),
		'email':	$('#i-email').val(),
		'time':		$('#i-time').val(),
		'date':		$('#i-date').val(),
		'phone':	$('#i-phone').val(),
		'inv': 		$('#i-guests').val()
	},
	  function (data)
	  { cleanBotonesModal(true);
	  	$('#i-name').val('');	$('#i-email').val('');	$('#i-time').val('');
		$('#i-date').val('');	$('#i-phone').val('');	$('#i-guests').val('');
	  	modal(BootstrapDialog.TYPE_SUCCESS,'SUCCESS','<p></p>',true);
	  });
}

$('.fotosCar').click(function(){
	window.location.replace(window.location.origin+'/ManyRestaurant/index.php/Restaurante/gallery');
});