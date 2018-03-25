<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/Ereo.css'); ?>">
<?php $this->load->view('FrontEnd/Global/generales'); ?>

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Event</h1>
</div>

<br>
<div class="container" style=" width: 100%;">
	<!-- ////////////////////	Contenedor de cada evento	//////////////////// -->
<?php $totalEv=0;	$first=1;
 foreach ($events as &$event) { 
 	if($totalEv==0)
 		$first=$event->id;
 	if($totalEv<3){ ?>
	<div class="row eventContainer">
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-1">
				<div id="fecha_eventdetail" class="pull-right text-center fechapost">
					<div>
						<?= GetFechaV($event->fecha); ?>	
					</div>			
				</div>
			</div>
			<div class="col-md-5">
				<img alt="Imagen no encontrada" src="<?= base_url().$event->foto;?>" class="imgn"></img>
			</div>
			<div class="col-md-3">
				<label id="eventhead"><?= $event->titulo; ?></label>
				<p class="dateDe"><img src="<?= base_url('assets/sources/img/Deerek/reloj.jpg'); ?>" class="img-fluid" alt="Responsive image" width="25px" height="25px">

					<b><?= GetHora($event->hora_in); ?> - <?= GetHora($event->hora_fin); ?></b></p>
				<p id="eventcontent"><?= $event->descripcion; ?></p>
				<button type="button" class="btn btn-lg botonview" id="<?= $event->id; ?>">VIEW EVENT DETAILS</button>
			</div>
		</div>
	</div>	
<?php $totalEv++; } } $sec=((int)$first+3);	$ter=((int)$sec+3);?>
	<!-- ////////////////////	fin del contenedor	//////////////////// -->

</div>
<br>
<div class="container" id="pagination">
	<div class="row">
		<div class="options col-xs-12">
			<div class="col-md-6 col-md-offset-3">
				<div class="pager">
					<button type="button" class="prev-next pull-left" id="<?= $ter; ?>"><span>< Next</span></button>
					<button type="button" class="prev-next pull-left midle" id="<?= $first; ?>">
						<span><?= $pager['uno']; ?></span></button>
					<button type="button" class="prev-next pull-left midle" id="<?= $sec; ?>">
						<span><?= $pager['dos']; ?></span></button>
					<?php if(count($events)>6){?>
					<button type="button" class="prev-next pull-left midle" id="<?= $ter; ?>">
						<span><?= $pager['tres']; ?></span></button>
					<?php } 
					$prev=1; 
					((count($events)>0 && (int)$first!=1)? $prev = ((int)$first-6):$prev = 1);
					(($prev<0)? $prev=1:$prev=$prev); 
					?>
					<button type="button" class="prev-next pull-left" 
						id="<?= $prev; ?>">
						<span>Prev ></span></button>
				</div>
				<form method="post" action="<?= base_url('index.php/restaurant/Events/changePage'); ?>" id="sendToPage">
					<input type="hidden" id="dataPageF" name="dataPageF">
				</form>
				<form method="post" action="<?= base_url('index.php/restaurant/Events/EvDetail'); ?>" id="sendToDetail">
					<input type="hidden" id="idToFind" name="idToFind">
				</form>
			</div>
		</div>
	</div>
</div>
<div class="opening">
	<?php $this->load->view('FrontEnd/Global/horaApertura',$time); ?>
</div>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script>var cantidad = <?= count($events); ?></script>
<script src="<?= base_url('assets/sources/js/restaurant/events.js'); ?>"></script>


