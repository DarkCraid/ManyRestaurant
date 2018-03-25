var ruta_base = window.location.href;
$(document).ready(function(){
	if(cantidad==0){
		$('.midle').attr('disabled',true);
		$('.midle').css('background','#f3f3f3');
	}
});


$('.prev-next').click(function(){
	var data 	= 	new Object();
	data.uno	=	this.id;
	data.dos	=	parseInt(this.id)+3;
	data.tres	=	parseInt(this.id)+6;
	$('#dataPageF').val(JSON.stringify(data));
	console.log(data);
	$('#sendToPage').submit();
});

$('.botonview').click(function(){
	$('#idToFind').val(this.id);
	$('#sendToDetail').submit();
});