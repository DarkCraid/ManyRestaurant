<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/reservation.css'); ?>">
<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Reservations</h1>
</div>

<div class="container">
	<section class="row text-center">
		<h2>Book a Table</h2>
		<p class="col-md-6 col-md-offset-3"><?= $restaurante[0]->historia; ?></p>
	</section>

<form id="formularioReservacion" action="<?php echo base_url('index.php/Restaurant/ReservacionControlador/guardar'); ?>" method="POST">
	<section class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row form-group">
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Name*" name="Nombre"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/user.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="email" class="inp" placeholder="Email*" name="Email"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/msg.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="text" class="inp" placeholder="Phone*" name="Telefono"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/cell.png'); ?>"></input>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<input type="date" class="inp" placeholder="Date*" name="Fecha"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/calendar.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="time" class="inp" placeholder="Time*" name="Hora"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/time.png'); ?>"></input>
				</div>
				<div class="col-md-4">
					<input type="number" min="0" class="inp" placeholder="Guests*" name="Invitados"><img class="img-icon" alt="icon" src="<?= base_url('assets/sources/icons/guests.png'); ?>"></input>
				</div>
			</div>
			<div class="row form-group">
				<textarea placeholder="Special Requirements*" name="Requerimientos"></textarea>
				<img src="<?= base_url('assets/sources/icons/chat.png'); ?>" alt="icon" class="icon-textarea">
			</div>
		</div>

	</section>
	<section class="row text-center">
		<button class="btn make" type="submit" id="guardar">MAKE RESERVATION</button>
	</section>
</form>
</div>

<div class="circles">
	<div class="container">
		<div class="row">
			<h3 class="text-center">Special Reservation</h3>
			<div class="col-md-10 col-md-offset-1">
				<?php $control=1; foreach($reserv as $res) {	?>
				<div class="col-md-4 img-reserv cuadrosInferiores normal" id="n_<?= $control; ?>">
					<img src="<?= base_url('assets/sources/img/restaurant/').$res->foto; ?>" alt="">
					<div class="col-xs-12 div-reserv">
						<h4><?= $res->titulo; ?></h4>
						<p><?= $res->descripcion; ?></p>
					</div>
				</div>
				<div class="col-md-4 cuadrosInferiores mask" id="m_<?= $control; ?>" style="display: none;">
					<div class="col-xs-12 reserv text-center">
						<img src="<?= base_url('assets/sources/icons/phone.png'); ?>" alt="telefono">
						<p class="first"><?= $restaurante[0]->telefono; ?></p>
						<p>Call us for a Special reservation</p>
						<img src="<?= base_url('assets/sources/icons/msg-white.png'); ?>" alt="mensaje">
						<p class="first"><?= $restaurante[0]->email; ?></p>
						<p>mail us for a Special reservation</p>
					</div>
				</div>
				<?php $control++; } ?>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script src="<?php echo base_url('assets/sources/js/Loui.js') ?>"></script>

<!--
	
				-->