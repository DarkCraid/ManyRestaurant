var listaDeIngredientes   = [];
var listaDePasos   = [];
$(document).ready(function()
{
});

$('#cliclIngrediente').click(function(event) {
  event.preventDefault();
  if(!$('#Ingredientes').val())
   modal(BootstrapDialog.TYPE_DANGER,'ERROR','<strong>Insert a detail</strong>',true);
  else{
  listaDeIngredientes.push($('#Ingredientes').val());
    $('#Ingredientes').val('');
    createListIngredientes();
  }
});

function createListIngredientes(){
  AddIngredientesInput();
  $('.IngredientesLista').children('ul').children('li').remove();
  for (var i = 0; i < listaDeIngredientes.length; i++) {
    $('.IngredientesLista').children('ul').append('<li><p><button class=" btn-danger" onclick="deleteFromListIngredientes('+i+')">delete</button> '+listaDeIngredientes[i]+'</p></li>');
  }
}

function deleteFromListIngredientes(id){
  listaDeIngredientes.splice(id, 1);
  createListIngredientes();
}



$('#cliclPaso').click(function(event) {
  //alert('asd');
  event.preventDefault();
  if(!$('#Pasos').val())
   modal(BootstrapDialog.TYPE_DANGER,'ERROR','<strong>Insert a detail</strong>',true);
  else{
  listaDePasos.push($('#Pasos').val());
    $('#Pasos').val('');
    createListPasos();
  }
});

function createListPasos(){
  AddPasosInput();
  $('.PasosLista').children('ul').children('li').remove();
  for (var i = 0; i < listaDePasos.length; i++) {
    $('.PasosLista').children('ul').append('<li><p><button class=" btn-danger" onclick="deleteFromListPasos('+i+')">delete</button> '+listaDePasos[i]+'</p></li>');
  }
}

function deleteFromListPasos(id){
  listaDePasos.splice(id, 1);
  createListPasos();
}

function AddPasosInput() {
  var Pasos_='';
  for (var i = 0; i < listaDePasos.length; i++) {
    Pasos_+=listaDePasos[i];
    if(i+1!=listaDePasos.length)
      Pasos_+=',';
  }
  $('#ContPasos').val(Pasos_);
}

function AddIngredientesInput() {
    var Ingredientes_='';
  for (var i = 0; i < listaDeIngredientes.length; i++) {
    Ingredientes_+=listaDeIngredientes[i];
    if(i+1!=listaDeIngredientes.length)
      Ingredientes_+=',';
  }
  $('#ContIngredientes').val(Ingredientes_);
}

    



