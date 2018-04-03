<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Recipies<small>Adm</small></h1>
	</section>

	<div class="container">
		 <form id="form-create-usuario" style="padding:0px 15px;"class="form-horizontal" role="form" action="<?php base_url();?>Recipies/SaveData" method="POST">
           <h2>[--------------------------------------------------------------------------------------------------------------------------]</h2>
    <p>Nuevo Seccion.</p>

    <div class="form-group">
      <label >Titulo:</label>
      <input type="text" class="form-control" name="txtTitulo" placeholder="Seccion">
    </div>
    <div class="form-group">
      <label >Descripcion:</label>
      <input type="text" class="form-control" name="txtDescripcion" placeholder="Seccion">
    </div>

    <div class="form-group">
      <label >Timpo de preparacion:</label>
      <input type="time" maxlength="100" class="form-control" name="txtPre" placeholder="Seccion">
    </div>

    <div class="form-group">
      <label >Tiempo de coccion:</label>
      <input type="time" maxlength="100" class="form-control" name="txtCoc" placeholder="Seccion">
    </div>


    

    <div class="form-group">
      <label for="cmbCargo">Tipo de Seccion</label>
      <select class="form-control"  name="cmbSeccion" id="cmbSeccion">
      </select>
    </div>


    <div class="form-group">
      <label >Imagen<small>[solo formato png | jpg]</small>:</label>
      <input type="file" class="form-control-file" name="fileEvidencia" aria-describedby="fileHelp">
    </div>


  <div class="row form-group">
    <div class="col-md-2 text-right">
                <label class="col-form-label mr-2 control-label">Ingredientes </label>
            </div>
            <div class="col-md-4">
                    <textarea maxlength="100" type="text" class="form-control" placeholder="*" id="Ingredientes"></textarea>
                    <a href="" id="cliclIngrediente" >Agregar Ingrediente</a>
            </div>
            <div class="col-md-6 IngredientesLista">
              <h4>Lista de Ingredientes</h4>
              <ul></ul>
              <input type="hidden" id="ContIngredientes" name="Ingredientes" />
            </div>
          </div>


          <div class="row form-group">
    <div class="col-md-2 text-right">
                <label class="col-form-label mr-2 control-label">Pasos de Preparacion </label>
            </div>
            <div class="col-md-4">
                    <textarea maxlength="100" type="text" class="form-control" placeholder="*" id="Pasos"></textarea>
                    <a href="" id="cliclPaso" >Agregar Pasos</a>
            </div>
            <div class="col-md-6 PasosLista">
              <h4>Lista de Pasos</h4>
              <ul></ul>
              <input type="hidden" id="ContPasos" name="Pasos" />
            </div>
          </div>


            



  
           <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>
          
        </form>

          

  
	</div>
              <div class="row">
      <section class="content">
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Recetas</h3>
                    </div>
                    <div class="box-body">
                        <table id="Exportar_a_Excel" class="table table-hover no-margin">
                          <thead>
                              <tr>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                              </tr>
                          </thead>
                          <tbody id="contenido_tabla"></tbody>
                        </table>
                    </div>
                  </div>
              </div>
            </div>
        </section>
    </div>
</div>




<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>

<script src="<?php echo base_url();?>assets/sources/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>assets/sources/js/GetTipo.js"></script>

<script src="<?php echo base_url();?>assets/sources/js/SendDataNew.js"></script>
<script src="<?php echo base_url();?>assets/sources/js/moreData.js"></script>


<!---->