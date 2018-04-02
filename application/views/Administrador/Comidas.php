<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Comidas<small>Adm</small></h1>
	</section>

	<div class="container">
		 <form id="form-create-usuario" style="padding:0px 15px;"class="form-horizontal" role="form" action="<?php base_url();?>Comidas/SaveData" method="POST">
           <h2>[--------------------------------------------------------------------------------------------------------------------------]</h2>
    <p>Nuevo Seccion.</p>

    <div class="form-group">
      <label >Nombre de la comida:</label>
      <input type="text" class="form-control" name="txtNombre" placeholder="Seccion">
    </div>
    <div class="form-group">
      <label >Precio de la comida:</label>
      <input type="text" class="form-control" name="txtPrecio" placeholder="Seccion">
    </div>

    <div class="form-group">
      <label for="cmbCargo">Tipo de Seccion</label>
      <select class="form-control"  name="cmbSeccion" id="cmbSeccion">
      </select>
    </div>



    <div class="form-group">
      <label >Descripcion de la comida:</label>
      <input type="text" class="form-control" name="txtDescripcion" placeholder="Seccion">
    </div>

    <div class="form-group">
      <label >Imagen<small>[solo formato png | jpg]</small>:</label>
      <input type="file" class="form-control-file" name="fileEvidencia" aria-describedby="fileHelp">
    </div>
  
           <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>
          
        </form>
	</div>
</div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>
<script src="<?php echo base_url();?>assets/sources/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>assets/sources/js/SendDataAdm.js"></script>
<script src="<?php echo base_url();?>assets/sources/js/GetTipo.js"></script>