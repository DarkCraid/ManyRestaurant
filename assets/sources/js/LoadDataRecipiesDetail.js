var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
    LoadDataGrid();
    //LoadDataMenu(); 
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
          $('#DataImageReceta').attr("src",'../../assets/uploads/recetas/'+item.foto+'');
        });
     });
}