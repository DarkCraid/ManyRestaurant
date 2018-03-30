<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Comidas<small>Adm</small></h1>
	</section>

	<div class="container">
		<form action="">
			<div class="row">
				<div class="col-sm-3"><label>Nombre de la Comida: </label></div>
				<div class="col-sm-3"><input type="text"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-3"><label>Precio de la Comida: </label></div>
				<div class="col-sm-3"><input type="text"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-3"><label>Categoria de la Comida: </label></div>
				<div class="col-sm-3">
					<select>
					  <option value="0">zxc</option>
					  <option value="1">cxz</option>
					  <option value="2">xzc</option>
					  <option value="3">xcz</option>
					</select> 
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-3"><label>Descripcion de la Comida: </label></div>
				<div class="col-sm-3"><input type="text"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-3"><label>Seleccionar Imagen: </label></div>
				<div class="col-sm-3"><input type="file"></div>
				<div class="col-sm-3"><input type="button" value="Ok"></div>
			</div>
		</form>
	</div>
</div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>

<script src="<?= base_url('assets/sources/js/LoadDataAdmComidas.js');?>"></script>