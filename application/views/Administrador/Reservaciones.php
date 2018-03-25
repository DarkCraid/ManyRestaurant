<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Reservaciones</h1>
	</section>
	
	<table class="table">
		<thead>
			<tr>
				<th>Nombre de Cliente</th>
				<th>E-Mail</th>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Telefono</th>
				<th>Invitados</th>
				<th>Requerimientos Especiales</th>
			</tr>
		</thead>

		<?php foreach ($key as $d) { ?>
		<tr id="arreglo">
			<td id="Nombre"><?php echo $d->nombre ?></td>
			<td id="Email"><?php echo $d->email ?></td>
			<td id="Fecha"><?php echo $d->fecha ?></td>
			<td id="Hora"><?php echo $d->hora ?></td>
			<td id="Telefono"><?php echo $d->telefono ?></td>
			<td id="Invitados"><?php echo $d->invitados ?></td>
			<td id="req_especiales"><?php echo  $d->req_especiales ?></td>
			<td><a href="<?php echo base_url()?>index.php/AccionesControl/cancel/<?php echo $d->id ?>" class="button">Cancelar</button></td>
		</tr>
		<?php } ?>
	</table>
</div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>