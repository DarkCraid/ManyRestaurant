
$(document).ready(function(){
	$('#restaurantOpt').click(function(){
		$('.menu-gallery').hide(500);
		$('.restaurant').show(500);
	});
	$('#foodOpt').click(function(){
		$('.menu-gallery').hide(500);
		$('.food').show(500);
	});
	$('#dessertsOpt').click(function(){
		$('.menu-gallery').hide(500);
		$('.desserts').show(500);
	});
	$('#optionAll').click(function(){
		$('.restaurant , .food , .desserts').show(500);
	});
});
