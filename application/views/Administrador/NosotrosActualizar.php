<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Actualizar ventana Sobre Nosotros / About us</h1>
	</section>

	<form id="formActuaNosotros" action="<?php echo base_url('index.php/Admin/NosotrosActualizar/do_upload') ?>" method="POST" enctype="multipart/form-data">
		<div class="form-group has-feedback">
			<input type="text" class="form-control" placeholder="Titulo" name="titulo" value="<?php echo $key->titulo ?>">
			<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
		</div>
		<div class="form-group">
			<textarea placeholder="Contenido" name="contenido" class="form-control"><?php echo $key->contenido ?>
			</textarea>
		</div>
		<div class="form-group has-feedback">
			<img src="<?php echo base_url('assets/sources/img/'.$key->foto);?>">
			<input type="file" class="form-control" name="userFile" value="<?php echo $key->foto ?>">
		</div>
		<input type="hidden" name="id" value="<?php echo $key->id ?>"
		<div class="form-group">
			<input type="submit">
		</div>
	</form>
</div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>
