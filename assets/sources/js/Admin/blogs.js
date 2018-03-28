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
    { 	var buttons	=	'<button class="btn btn-danger" id="'+item.id+'">DELETE</button>';	
    	var cont 	=	'<tr><td>'+item.titulo+'</td><td>'+item.fecha+'</td>';
    		cont 	+=	'<td>'+buttons+'</td></tr>';
		$('#contenido_tabla').append(cont);
    });
    insertarPaginado('tab');
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
/*
$("#addBlogForm").submit(function(event)
    {
        event.preventDefault();


        var formData = new FormData($("#addBlogForm")[0]);
        $.ajax({
            url:$(this).attr('action'),
            type:$(this).attr('method'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'text',
            success:function(data)
            {	cleanBotonesModal(true);
                switch(data){
                	case "empty":
                		modal(BootstrapDialog.TYPE_DANGER,'ERROR','<strong>Campos vacios.</strong>',true);
                		break;
                	default:
                		window.location.reload();
                		break;
                }
            }
        });   
    });*/