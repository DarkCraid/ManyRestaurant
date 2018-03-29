var base_url = 'http://localhost/ManyRestaurant/index.php/Restaurant/';
$(document).ready(function(){
	LoadDataGrid();		
});

function LoadDataGrid() 
{
	$.post(base_url+'Menu/LoadData',
      {},
      function (data)
      {
        var typeClass = '';
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
            if (item.tipo == 1) {typeClass = 'breakfast';}
            else if (item.tipo == 2) {typeClass = 'lunch';}
            else if (item.tipo == 3) {typeClass = 'snack';}
            else if (item.tipo == 4) {typeClass = 'pizza';}
            else if (item.tipo == 5) {typeClass = 'soup';}
            else if (item.tipo == 6) {typeClass = 'dinner';}
            else if (item.tipo == 7) {typeClass = 'snack';}
            $('#TodaComida').append('<div class="menu-gallery '+typeClass+'">'
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