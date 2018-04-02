var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
	LoadData();
		
});

function LoadData() 
{
	$.post(base_url+'Chef/LoadData',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#DataChef').text('Chef: '+ item.nombre);
            $('#DataDescription').text(item.descripcion);
            $("#DataImageChef").attr("src",'../../assets/uploads/chefs/'+item.foto+'');

            $('#ContainerChef').append('<div class="menu-gallery chef1">'
                        +'<img src="../../assets/sources/img/'+item.foto+'">'
                        +'<div class="menu-desc ">'
                        +'<h5><b><center><a onclick="ChangePic('+item.id+')">'+item.nombre+'</a></center></b></h5>'
                        +'</div>'
                    +'</div>');
        });
     });
}
function ChangePic(data) 
{
    $.post(base_url+'Chef/LoadDataSpecific',
      {
        'data': data
      },
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#DataChef').text('Chef: '+ item.nombre);
            $('#DataDescription').text(item.descripcion);
            $("#DataImageChef").attr("src",'../../assets/uploads/chefs/'+item.foto+'');
        });
     });
}