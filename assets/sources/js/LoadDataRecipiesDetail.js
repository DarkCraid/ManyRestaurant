var array_='';
var data_='';
var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
    LoadDataGrid();
    LoadDataPasos(); 
});

function LoadDataGrid() 
{
    $.post(base_url+'Recipie/LoadDataIdOb',
      {
        'IdOb' : $('#IdOb').val()
      },
      function (data)
      {
       var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
          $('#nombreReceta').text(item.titulo);
          $('#Descripcion').text(item.descripcion);
          $('#timePreparacion').text(item.preparacion);
          $('#timeCoccion').text(item.termino);
          $('#DataImageReceta').attr('src',"../../../assets/uploads/recetas/"+item.foto+"");
          array_ = item.ingredientes;
        });
        data_ = array_.split(",");
        for (var i in data_) {
            $('#ContIngredientes_').append('<p><img src="../../../assets/sources/img/check.png" width="50px" heigh="50px">'+data_[i]+'</p>');
        }



     });
}


function LoadDataPasos() 
{
    $.post(base_url+'Recipie/LoadDataIdObPasos',
      {
        'IdOb' : $('#IdOb').val()
      },
      function (data)
      {
       var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
          $('#PasosCont').append('<div class="row step">'
              +'<div class="col-xs-2">'
                +'<div><p>'+item.orden+'<br>STEP</p></div>'
              +'</div>'
              +'<div class="col-xs-10">'
                +'<p>'+item.pasos+'</p>'
              +'</div>'
            +'</div>');
        });
     });
}