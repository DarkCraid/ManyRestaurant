var img_route	=	window.location.origin+'/ManyRestaurant/';
$('#photo').change(function(){
	$('#fotoImg').attr('src', img_route+'assets/sources/img/restaurant/'+$( "#photo option:selected" ).text());
});

$('#save').click(function(){
	$('#saaveForm').submit();
});