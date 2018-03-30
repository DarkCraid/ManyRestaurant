var base_url = 'http://localhost/ManyRestaurant/index.php/';
$(document).ready(function(){
	//alert(base_url);
		
});





function LoadData() 
{
	$.post(base_url+'Menu/LoadData',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
                    
            /*$('#representanteLegal').val(item.persona_nom+" "+item.ap_paterno+" "+item.ap_materno);
            $('#calle').val(item.calle);
            $('#postal').val(item.cp);
            $('#n_e').val(item.numero_externo);
            $('#n_i').val(item.numero_interno);
            $('#telefono').val(item.telefono);
            $('#colonia').val(item.colonia_nom);
            $('#ciudad').val(item.ciudad_nom);
            $('#municipio').val(item.municipio_nom);

            ArrayFechaDb['ano'] = item.fecha.substr(0,4);
            ArrayFechaDb['mes'] = item.fecha.substr(5,2);
            ArrayFechaDb['dia'] = item.fecha.substr(8,2);

            $('#estado').val(item.estado_nom);
            $('#address').val(item.gps);
            DatosOficio[0] = item.gps;
            DatosOficio[1] = item.persona_nom+" "+item.ap_paterno+" "+item.ap_materno;
            DatosOficio[2] = item.institucion_nom;
            DatosOficio[3] = item.municipio_nom;
            DatosOficio[4] = item.ciudad_nom;
            email = item.correo_electronico;
            newstat = item.estatus_soli;
            idAreaEstudio = item.AreaEstudio;*/

        });
     });
}