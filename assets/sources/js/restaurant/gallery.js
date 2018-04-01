var ruta_base	=	window.location.origin+'/ManyRestaurant/index.php/';
$(document).ready(function(){
	loadPictures('Restaurant/Galeria/GetFotos',1);
});

$('.imgG').click(function(){
	$('.rowG').children('div').remove();
	for (var i = 1; i <= 4; i++) {
		$('.rowG').append('<div class="column" id="col'+i+'"></div>');
	}
	loadPictures('Restaurant/Galeria/GetFotos',this.id);
});

function loadPictures(ruta,filtro){
	$.post(ruta_base+ruta,{
		'filtro': 	filtro,
	},
	  function (data)
	  { var c       = JSON.parse(data);
	  	var columna = 1;
	    $.each(c,function(i,item)
	    { 	var rutaImg = window.location.origin+'/ManyRestaurant/'+item.rutaName;
	    	$('#col'+columna).append('<img src="'+rutaImg+'" id="'+rutaImg+'" style="width:100%">');
	    	if(columna<4){
	    		columna++;
	    	}
	    	else
	    		columna = 1;
	    });
	  });
}

//