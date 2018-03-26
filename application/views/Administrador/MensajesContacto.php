<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Mensaje de los Clientes</h1>
	</section>

	<table class="table">
		<thead>
			<tr>
				<th>Nombre de Cliente</th>
				<th>E-Mail</th>
				<th>Mensaje</th>
			</tr>
		</thead>

		<?php foreach ($key as $d) { ?>
		<tr id="arreglo">
			<td id="Nombre"><?php echo $d->nombre ?></td>
			<td id="Email"><?php echo $d->email ?></td>
			<td id="Mensaje"><?php echo $d->mensaje ?></td>
			<td><a href="<?php echo base_url()?>index.php/AccionesControl/leido/<?php echo $d->id ?>" class="button">Cancelar</button></td>
		</tr>
		<?php } ?>
	</table>
</div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>
