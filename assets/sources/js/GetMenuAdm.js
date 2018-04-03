var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
    LoadDataMenu(); 
});
function LoadDataMenu()
{
    $.post(base_url+'Menu/LoadDataMenu',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
           $('#contenido_tabla').append('<tr id="fila_'+item.id+'">'+
        '<td>'+item.tipo+'</td>'+
        '<td><img src="../../assets/uploads/icons/'+item.icono+'"></td>'+
        '<td>'+'<span class="label label-danger">'+'<a onclick="EliminarData('+item.id+')" style="cursor:pointer;">Eliminar</a>'+'</span>'+'</td>'+
        '</tr>');

        });
     });
}
function EliminarData(data) {
  $.post(base_url+'Menu/RemoveItem',
      {
        'IdOb' : data
      },
      function (data)
      {
        DropDataTable();
        LoadDataMenu();
        BootstrapDialog.show({
                type: BootstrapDialog.TYPE_SUCCESS,
                title: '¡ATENCIÓN!',
                message: $('<h4 class="text-center"> <strong>'+data+'</strong> </h4>'),
                    size: BootstrapDialog.SIZE_WIDE,
                    tabindex: false,
                buttons: [{
                    label: 'Aceptar',
                    cssClass: 'btn-danger',
                    action: function(dialogItself){
                        dialogItself.close();
                    }
                    }]
            });
     });
}

  var DropDataTable = function() 
  { 

    $("#contenido_tabla tr").remove(); //elimina las filas de la tabla.
  }