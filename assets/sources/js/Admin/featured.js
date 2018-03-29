var ruta_base	=	window.location.origin+'/ManyRestaurant/index.php/';
var todoSelected=	['',0];
var featSelected=	['',0];

$(document).ready(function(){
	insertTableFeatured(ruta_base+'Admin/Events/GetFeatured');
	insertTableAll(ruta_base+'Admin/Events/GetAllEv');
});

function insertTableFeatured(ruta){
	ajaxPost(ruta,'featured');
}

function insertTableAll(ruta){
	ajaxPost(ruta,'todo');
}

function ajaxPost(ruta,to){
	$.post(ruta,
	  function (data)
	  { var c       = JSON.parse(data);
	    $.each(c,function(i,item)
	    { 	var buttons	=	'<button class="btn btn-primary" onclick="sel('+item.id+',\''+to+'\')">select</button>';	
	    	var cont 	=	'<tr id="'+to+'_'+item.id+'"><td>'+item.titulo+'</td>';
	    		cont 	+=	'<td>'+buttons+'</td></tr>';
			$('#'+to).children('#contenido_tabla').append(cont);
	    });
	  });
}

function sel(id,from){
	$('#'+from+'_'+id).css('background-color','#94b8ef');
	if(from=="todo"){
		if(todoSelected[0])
			$('#'+todoSelected[0]).css('background-color','white');
		todoSelected[0]	=	from+'_'+id;
		todoSelected[1] =	id;
	}
	else{
		if(featSelected[0])
			$('#'+featSelected[0]).css('background-color','white');
		featSelected[0]	=	from+'_'+id;
		featSelected[1] =	id;
	}
}

$('.imgArrow').click(function(){
	if(todoSelected[1]&&featSelected[1]){
		$.post(ruta_base+'Admin/Events/changeFeatured',{
			'idEvent': 	todoSelected[1],
			'idFeat': 	featSelected[1]
		},
		  function (data)
		  { dropDataTable('todo');
		  	dropDataTable('featured');
		  	insertTableFeatured(ruta_base+'Admin/Events/GetFeatured');
			insertTableAll(ruta_base+'Admin/Events/GetAllEv');
		});
	}
	else{
		cleanBotonesModal(true);
		modal(BootstrapDialog.TYPE_DANGER,'ERROR','<strong>Select events for change them.</strong>',true);
	}
});