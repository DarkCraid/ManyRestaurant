$(document).on("ready", main);

function main(){
  $("#msg-error").hide();
  //mostrarDatos("");
  $("#form-create-usuario").submit(function(event){
    event.preventDefault();

    var formData = new FormData($("#form-create-usuario")[0]);
    $.ajax({
      url:$(this).attr('action'),
      type:$(this).attr('method'),
      data: formData,
            cache: false,
            contentType: false,
            processData: false,
      success:function(resp){


        BootstrapDialog.show({
                type: BootstrapDialog.TYPE_SUCCESS,
                title: '¡ATENCIÓN!',
                message: $('<h4 class="text-center"> <strong>'+resp+'</strong> </h4>'),
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
      }

    });

  });
}
