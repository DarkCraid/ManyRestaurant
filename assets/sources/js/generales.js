var idiomaPaginado;
var botonesModal=[];

$(document).ready(function(){
  cleanBotonesModal(false);
});

// -------------------------------------------------------------------------------------------------- destrir tabla
function dropDataTable(tableId){ 
  $('#'+tableId).dataTable().fnDestroy();
  $('#'+tableId).children('tbody').children('tr').remove();
}

// -------------------------------------------------------------------------------------------------- destruir combo
function dropDataCombo(comboId){
  var x = document.getElementById(comboId);
  while (x.length > 0){
      x.remove(x.selectedIndex);
  }
}

// -------------------------------------------------------------------------------------------------- destruir combo
function insertarPaginado(tableId){
	$('#'+tableId).DataTable({
       'paging'       : true,
       'lengthChange' : false,
       'searching'    : false,
       'ordering'     : true,
       'info'         : true,
       'autoWidth'    : false,
       'destroy'      : true,
       "iDisplayLength": 7,
       "language"     : {  "url": idiomaPaginado  }
    });
}

// -------------------------------------------------------------------------------------------------- crear modal
function modal(tipe,titleMod,msg,close){
  BootstrapDialog.show({
    type: tipe,
    title: titleMod,
    size: BootstrapDialog.SIZE_WIDE,
    message: function(dialogRef){
        var $message = $(msg);
        return $message;
    },
    closable: close,
    buttons: botonesModal
  });
}

// -------------------------------------------------------------------------------------------------- limpia los botones
function cleanBotonesModal(type){
  if(type){
    botonesModal=[{ 
    label: 'Cerrar',
        cssClass: 'btn-default',
        action: function(dialogItself){ dialogItself.close(); }
    }];
  }
  else{
    botonesModal=[];
  }
}