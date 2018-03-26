var ruta_base = window.location.href;
$(document).ready(function(){
	
});

$('.prev-next').click(function(){
	$('#idToFind').val(this.id);
	$('#sendToDetail').submit();
});