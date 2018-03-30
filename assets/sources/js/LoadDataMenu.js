var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
	LoadDataGrid();
    LoadDataMenu();	
});

function LoadDataGrid() 
{
	$.post(base_url+'Menu/LoadData',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#TodaComida').append('<div class="menu-gallery '+item.tipo+'">'
                +'<img src="../../assets/sources/img/food/'+item.imagen+'"  >'
                +'<div class="menu-desc ">'
                    +'<h5><b>'+item.nombre+'</b><br><small>'+item.descripcion+'</small></h5>'
                    +'<hr>'
                    +'<p class="costFood">$'+item.precio+'.00</p>'
                +'</div>'
            +'</div>');
        });
     });
}

function LoadDataMenu()
{
    $.post(base_url+'Menu/LoadDataMenu',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            $('#MenuAll').append('<div class="option" onclick="ClickEfect('+item.id+')">'
                    +'<img src="../../assets/sources/img/'+item.icono+'">'
                    +'<h4>'+item.tipo+'</h4>'
                +'</div>');
        });
     });
}

function ClickEfect(txt) 
{
    if (txt ==7) 
    {
        $('.menu-gallery').show(500);
    }
    else
    {
        txt='.'+txt;
        $('.menu-gallery').hide(500);
        $(txt).show(500);
     } 
}