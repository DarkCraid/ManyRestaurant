var ruta_base	=	window.location.origin+'/ManyRestaurant/index.php/';
var lista		=	[];
$(document).ready(function(){

	InsertDataTable(ruta_base+'Admin/Events/GetDataEvents');
});

$('.btnPrin').click(function(){
	switch($(this).text()){
		case 'Add new event':
			appendAdd();
			break;
		default:
			appendShow();
			break;
	}
});

function appendAdd(){
	$('.add').css('display','block');
	$('.ver').css('display','none');
}

function appendShow(){
	$('.add').css('display','none');
	$('.ver').css('display','block');
}

function InsertDataTable(ruta){
	$.post(ruta,
  function (data)
  { var c       = JSON.parse(data);
    var estatus = "";
    $.each(c,function(i,item)
    { 	var buttons	=	'<button class="btn btn-danger" onclick="del('+item.id+')">DELETE</button>';	
    	var cont 	=	'<tr><td>'+item.titulo+'</td><td>'+item.fecha+'</td>';
    		cont 	+=	'<td>'+buttons+'</td></tr>';
		$('#contenido_tabla').append(cont);
    });
    insertarPaginado('tab');
  });
}

$('.btnEx').click(function(){
	cleanBotonesModal(true);
	if(!$('#det').val())
		modal(BootstrapDialog.TYPE_DANGER,'ERROR','<strong>Insert a detail</strong>',true);
	else{
		lista.push($('#det').val());
		createList();
		$('#det').val('');
	}
});

function createList(){
	$('.detailsList').children('ul').children('li').remove();
	for (var i = 0; i < lista.length; i++) {
		$('.detailsList').children('ul').append('<li><p><button class=" btn-danger" onclick="deleteFromList('+i+')">delete</button> '+lista[i]+'</p></li>');
	}
}

function deleteFromList(id){
	lista.splice(id, 1);
	createList();
}

function del(id){
	$.post(ruta_base+'Admin/Events/DeleteEvent',{
		'idDel': 	id,
	},
	  function (data)
	  { window.location.reload();
	  });
}

function readURL(input,idImg) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+idImg).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

$('#addE').click(function(){
	var detalles='';
	for (var i = 0; i < lista.length; i++) {
		detalles+=lista[i];
		if(i+1!=lista.length)
			detalles+=',';
	}
	$('#detallesLista').val(detalles);
	if($('#detallesLista').val()!='')
		$('#addBlogForm').submit();
	else{
		cleanBotonesModal(true);
		modal(BootstrapDialog.TYPE_DANGER,'ERROR','<strong>There are any detail.</strong>',true);
	}

});