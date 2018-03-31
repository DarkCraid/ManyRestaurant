<style>
	
.img-reserv>img{
	width: 100%;
	height: 150px;
}
.reserv{
	background-color: #fe4c8d;
	color: white;
	height: 340px;
	margin-bottom: 80px;
	padding-top: 55px;
}
.reserv>p:not(.first){
	margin-bottom: 30px;
}
.div-reserv{
	background: white;
	margin-bottom: 80px;
	padding: 25px;
	height: 240px;
	border:1px solid #e3e3e3;
}
.time-yellow{
	position: relative;
	top: -8px;
	font-size: 14px;
}
.time-yellow>img{
	top: -2px;
	width: 20px;
	height: 20px;
	position: relative;
}
.dateRes{
	position: absolute;
	background: #fea100;
	z-index: 10;
	top: 0px;
	margin-top: 121px;
	color: white;
	font-weight: bold;
	padding: 5px;
	padding-left: 10px;
	padding-right: 13px;
	margin-left: 40px;
}
</style>

<section class="event-detail-img">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 container"><h3>Featured Events</h3></div>
			<div class="col-md-10 col-md-offset-1">
				
			<?php foreach ($featuredEv as $fev) {	?>
				<div class="col-md-4 img-reserv">
					<img src="<?= base_url('assets/sources/img/events/').$fev->foto; ?>" alt="">
					<div class="dateRes"><?= GetFechaH($fev->fecha); ?></div>
					<div class="col-xs-12 div-reserv">
						<h4><?= $fev->titulo ?></h4>
						<strong class="time-yellow"><img src="<?= base_url('assets/sources/icons/time-yellow.png'); ?>" alt="icon">
							<?= GetHora($fev->hora_in); ?> - <?= GetHora($fev->hora_fin); ?>
						</strong>
						<p><?= $fev->descripcion; ?></p>
					</div>
				</div>
			<?php } ?>

			</div>
		</div>
	</div>
</section>