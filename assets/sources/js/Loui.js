var base_url = window.location.origin+'/ManyRestaurant/assets/sources/';
var ruta_base= window.location.origin+'/ManyRestaurant/index.php/';
$(document).ready(function(){
	InsertCuadros('Restaurant/ReservacionControlador/GetCuadros');
});
$('.normal').hover(function(){
	var id = 0;
	switch(this.id){
		case "n_1": 	id = 1;	break;
		case "n_2": 	id = 2;	break;
		case "n_3": 	id = 3;	break;
	}
	$('#m_'+id).css('display','block');
	$('#'+this.id).css('display','none');
});
$('.mask').mouseleave(function(){
	var id = 0;
	switch(this.id){
		case "m_1": 	id = 1;	break;
		case "m_2": 	id = 2;	break;
		case "m_3": 	id = 3;	break;
	}
	$('#n_'+id).css('display','block');
	$('#'+this.id).css('display','none');
});