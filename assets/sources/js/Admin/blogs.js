var ruta_base	=	window.location.origin+'/ManyRestaurant/index.php/';
$(document).ready(function(){

	InsertDataTable(ruta_base+'Admin/Blogs/GetDataBlogs');
});

$('.btnPrin').click(function(){
	switch($(this).text()){
		case 'Add new post':
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

function del(id){
	$.post(ruta_base+'Admin/Blogs/DeletePost',{
		'idDel': 	id,
	},
	  function (data)
	  { window.location.reload();
	  });
}

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagenBlog').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

$('#addB').click(function(){
	$('#addBlogForm').submit();
});

$('#addC').click(function(){
	var cont 	=	'<div class="row"><div class="container">';
		cont 	+=	'<div class="col-xs-3 text-right">Category:</div>';
		cont 	+=	'<div class="col-xs-5"><input type="text" class="form-control" id="inpCat"></div></div></div>';
		cleanBotonesModal(true);
		botonesModal.push({
              label: 'ADD CATEGORY',
              cssClass: 'btn-success',
              action: function(dialogItself){
              	$.post(ruta_base+'Admin/Blogs/AddCategory',{
					'category': 	$('#inpCat').val(),
				},
				  function (data)
				  { if(data=="error")
				  		alert("no se pudo guardar");
				  	else{
				  		dropDataCombo('category');
				  		var c = JSON.parse(data);
				  		$.each(c,function(i,item)
				        { $('#category').append('<option value="'+item.id+'">'+item.titulo+'</option>');
				        });
				  		dialogItself.close();
				  	}
				  	
				  });
              }
          });
		modal(BootstrapDialog.TYPE_DEFAULT,'ADD NEW CATEGORY',cont,true);
});