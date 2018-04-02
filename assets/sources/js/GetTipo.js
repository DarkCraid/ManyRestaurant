var base_url = 'http://localhost/ManyRestaurant/index.php/Admin/';
$(document).ready(function()
{
  $.post(base_url+'Comidas/GetTipo/',
  {},
  function (data)
  {
    var c = JSON.parse(data);
    $.each(c,function(i,item)
    {
      $('#cmbSeccion').append('<option value="'+item.id+'">'+item.tipo+'</option>');
    });
  });

});
