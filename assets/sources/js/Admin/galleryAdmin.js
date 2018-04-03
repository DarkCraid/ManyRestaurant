var ruta_base	=	window.location.origin+'/ManyRestaurant/index.php/';
var img_route	=	window.location.origin+'/ManyRestaurant/assets/sources/icons/gallery/';
$(document).ready(function(){
	insertTableG('Admin/GaleriaSubir/GetAllCategories');
});

$('#newOption').click(function(){
	cleanBotonesModal(true);
	var cont 	=	'<form enctype="multipart/form-data" role="form" method="post" action="'+ruta_base+'Admin/GaleriaSubir/AddCategory"  id="addCat">';
		cont 	+=	'<div class="row"><div class="col-xs-3 text-right"><label>type option\'s name</label></div>';
		cont 	+=	'<div class="col-xs-4"><input type="text" class="form-control" id="option" name="category"/></div></div><br><div class="row">';
		cont 	+=	'<div class="col-xs-3 text-right"><label>type folder\'s name</label></div>';
		cont 	+=	'<div class="col-xs-4"><input type="text" class="form-control" id="folder" name="fol" /></div></div><br>';
		cont 	+=	'<div class="row"><div class="col-xs-3 text-right"><label>Choese an icon</label></div>';
		cont 	+=	'<div class="col-xs-4"><input type="file" class="form-control" id="icon" name="icon" /></div></div></form>';

	botonesModal.push({
              label: 'ADD',
              cssClass: 'btn-success',
              action: function(dialogItself){
              	var filename = $('#icon[type=file]').val().split('\\').pop();
              	if($('#option').val() && $('#folder').val() && filename!=""){
              		$('#addCat').submit();
              	}
              	else
              		alert('Inputs are empty');
              }
          });

	modal(BootstrapDialog.TYPE_DEFAULT,$(this).text(),cont,false);
});

function insertTableG(ruta){
	$.post(ruta_base+ruta,
	  function (data)
	  { var c = JSON.parse(data);
  		$.each(c,function(i,item){ 
  			var icon 	=	'<img src="'+img_route+item.icono+'" style=" width: 30px;height: 30px;">';
  			var button  =	item.status;
  			if(item.id!=1){
  				if(button==0)
  					button	=	'<button class="btn btn-primary" onclick="buttonLook('+item.id+',\'unlock\')">UNLOCK</button>';
	  			else
	  				button	=	'<button class="btn btn-danger" onclick="buttonLook('+item.id+',\'lock\')">LOCK</button>';
	  			if(item.default==0){
		  			button 	+=	'<button style="margin-left:10px;" class="btn btn-primary" onclick="buttonAdd('+item.id+',\''+item.folder+'\')">ADD PHOTO</button>';
		  		}
	  		}

	  		else button = "";
  			var cont 	=	'<tr><td>'+icon+'</td><td>'+item.categoria+'</td><td>'+button+'</td></tr>';
  			$('#contenido_tabla').append(cont);
        });
	  });
}

function buttonLook(id,msg){
	$.post(ruta_base+'Admin/GaleriaSubir/ChangeStatus',{
		'idCat': 	id,
		'status': 	msg
	},
	function (data){
		dropDataTable('galleryTab');
		insertTableG('Admin/GaleriaSubir/GetAllCategories');
	});
}

function buttonAdd(id,folder){
	cleanBotonesModal(true);
	var cont 	=	'<form enctype="multipart/form-data" role="form" method="post" action="'+ruta_base+'Admin/GaleriaSubir/AddPhoto" id="addPhoto">';
		cont 	+=	'<div class="col-xs-3 text-right"><label>Choese a picture</label></div><div class="col-xs-4"><input type="file" class="form-control" id="photo" name="photo" /></div>';
		cont 	+=	'<input type="hidden" name="idCategory" value="'+id+'" /><input type="hidden" name="folder" value="'+folder+'" /></form>';
	botonesModal.push({
      label: 'ADD',
      cssClass: 'btn-success',
      action: function(dialogItself){
      	var filename = $('#photo[type=file]').val().split('\\').pop();
      	if(filename!=""){
      		$('#addPhoto').submit();
      	}
      	else
      		alert('Choese a picture');
      }
  	});
	modal(BootstrapDialog.TYPE_DEFAULT,$(this).text(),cont,false);

}