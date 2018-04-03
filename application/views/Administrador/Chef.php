<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Chef<small>Adm</small></h1>
	</section>

	<div class="container">
		 <form id="form-create-usuario" style="padding:0px 15px;"class="form-horizontal" role="form" action="<?php base_url();?>Chef/SaveData" method="POST">
           <h2>[--------------------------------------------------------------------------------------------------------------------------]</h2>
    <p>Nuevo Seccion.</p>

    <div class="form-group">
      <label >Nombre del Chef:</label>
      <input type="text" class="form-control" name="txtNombre" placeholder="Seccion">
    </div>
        <div class="form-group">
      <label >Puesto del Chef:</label>
      <input type="text" class="form-control" name="txtPuesto" placeholder="Seccion">
    </div>

    <div class="form-group">
      <label >Descripcion del Chef:</label>
      <input type="text" class="form-control" name="txtDescripcion" placeholder="Seccion">
    </div>

    <div class="form-group">
      <label >Foto del Chef<small>[solo formato png | jpg]</small>:</label>
      <input type="file" class="form-control-file" name="fileEvidencia" aria-describedby="fileHelp">
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
                        <h3 class="box-title">Lista de empleados</h3>
                    </div>
                    <div class="box-body">
                        <table id="Exportar_a_Excel" class="table table-hover no-margin">
                          <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Puesto</th>
                                <th>Descripcion</th>
                                <th>Foto</th>
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
<script src="<?php echo base_url();?>assets/sources/js/SendDataAdm.js"></script>
