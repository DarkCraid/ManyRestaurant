<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section>
		<h1>Subir a la Galeria</h1>
	</section>

	<form id="formGaleria" action="<?= base_url('index.php/Admin/GaleriaSubir/do_upload'); ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group has-feedback">
			<label>Seleccione tipo de fotografía</label>
			<select name="Tipo" id="Tipo">
				<option value="Restaurant">Restaurant</option>
				<option value="Comida">Comida</option>
				<option value="Postres">Postres</option>
			</select>
		</div>
		<div class="form-group has-feedback">
			<input type="file" class="form-control" name="userFile" >
		</div>
		<div class="form-group">
			<input type="submit">
		</div>
	</form>
</div>


<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>
