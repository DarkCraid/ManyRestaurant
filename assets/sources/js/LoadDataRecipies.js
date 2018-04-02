var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
    LoadDataGrid();
    //LoadDataMenu(); 
});

function LoadDataGrid() 
{
    $.post(base_url+'Recipie/LoadData',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#ContenedorRecetas').append('<div class="central" >'
      +'<div class="col-sm-6 info">'
       +'<div class="col-sm-5">'
          +'<img class="imgNormal" src="../../assets/uploads/recetas/'+item.foto+'" alt="imagen">'
        +'</div>'
        +'<div class="col-sm-7 info-cont">'
          +'<h2>'+item.titulo+'</h2>'
          +'<img class="estrellas" src="../../assets/sources/img/estrellas.png" alt="estrellas">'
          +'<p>'+item.descripcion+'</p>'
          +'<button class="btn" onclick="ClickFuny('+item.id+')">RECIPE DETAILS</button>'
        +'</div>'
      +'</div>'
    +'</div>');
        });
     });
}

function ClickFuny(data) 
{

  $("#IdOb").val(data);
  $("#IdOb_Link").submit();

}