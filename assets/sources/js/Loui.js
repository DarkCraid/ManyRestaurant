var base_url = window.location.origin+'/ManyRestaurant/assets/sources/';
var ruta_base= window.location.origin+'/ManyRestaurant/index.php/';
$(document).ready(function(){
	$('#restaurantOpt').click(function(){
		$('.menu-gallery1').hide(500);
		$('.restaurant').show(500);
	});
	$('#foodOpt').click(function(){
		$('.menu-gallery1').hide(500);
		$('.food').show(500);
	});
	$('#dessertsOpt').click(function(){
		$('.menu-gallery1').hide(500);
		$('.desserts').show(500);
	});
	$('#optionAll').click(function(){
		$('.restaurant , .food , .desserts').show(500);
	});
	InsertCuadros('Restaurant/ReservacionControlador/GetCuadros');
});
$('.normal').hover(function(){
	var id = 0;
	switch(this.id){
		case "n_0": 	id = 0;	break;
		case "n_1": 	id = 1;	break;
		case "n_2": 	id = 2;	break;
	}
	$('#m_'+id).css('display','block');
	$('#'+this.id).css('display','none');
});
$('.mask').mouseleave(function(){
	var id = 0;
	switch(this.id){
		case "m_0": 	id = 0;	break;
		case "m_1": 	id = 1;	break;
		case "m_2": 	id = 2;	break;
	}
	$('#n_'+id).css('display','block');
	$('#'+this.id).css('display','none');
});