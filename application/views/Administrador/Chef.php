<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Chef<small>Adm</small></h1>
	</section>

	<div class="container">
		<form action="">
			<div class="row">
				<div class="col-sm-3"><label>Nombre del Chef: </label></div>
				<div class="col-sm-3"><input type="text"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-3"><label>Descripcion del Chef: </label></div>
				<div class="col-sm-3"><input type="text"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-3"><label>Seleccionar Foto: </label></div>
				<div class="col-sm-3"><input type="file"></div>
				<div class="col-sm-3"><input type="button" value="Ok"></div>
			</div>
		</form>
	</div>
</div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>

<script src="<?= base_url('assets/sources/js/LoadDataAdmChef.js');?>"></script>