<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/Kirey.css');?>">

<div class="header">
	<img src="<?php echo base_url('assets/sources/img/primera.jpg'); ?>" width="100%" heigh="100px">
</div>

<section>
	<div id="container-menu">
		<ul class="menu">
			<li><img class="lineas" src="<?php echo base_url('assets/sources/img/menu.png'); ?>" width="50" heigh="50px">
				<ul >
					<li><a><img src="<?php echo base_url('assets/sources/img/11.png'); ?>" width="40%" heigh="40px">
					BREAKFAST</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/22.png'); ?>" width="40%" heigh="40px">
					STARTER</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/33.png'); ?>" width="40%" heigh="40px">
					LUNCH</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/4.png'); ?>" width="40%" heigh="40px">
					DINNER</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/5.png'); ?>" width="40%" heigh="40px">
					DESSERT</a></li>
				</ul>
			</li>
		</ul>
	</div>
</section>

<div class="container">
	<section class="row">
		<div class="container">
				<div class="recipie">
					<h2 class="subir"><strong>Our Special Recipies</strong></h2><br>
						<div class="col-md-8 col-md-offset-2 dateDe">
							<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>	
						</div>
				</div>
		</div>
	</section>
<!-- ///////////////////////////////////////////////////////////// contenido cuadros ROW  -->
	<?php foreach (array(1,2,3) as &$a) { ?>

	<section class="row">
		<div class="central" >
			<!-- ///////////////////////////////////////////////////////////// rectangulo  -->
			<?php foreach (array(1,2) as &$b) { ?>
			<div class="col-sm-6 info">
				<div class="col-sm-5">
					<img class="imgNormal" src="<?= base_url('assets/sources/img/primera.jpg'); ?>" alt="imagen">
				</div>
				<div class="col-sm-7 info-cont">
					<h2>title here</h2>
					<img class="estrellas" src="<?= base_url('assets/sources/img/estrellas.png'); ?>" alt="estrellas">
					<p>Lorem ipsum dolor sit amet, consectetur abus, rem suscipit illum aut officiis eum nesciunt voluptatum possimus voluptates animi in? Enim tempore dicta adipisci deserunt.</p>
					<button class="btn">RECIPE DETAILS</button>
				</div>
			</div>
			<?php } ?>
			<!-- ///////////////////////////////////////////////////////////// end rectangulo  -->
		</div>
	</section>
	
	<?php } ?>
	<!-- ///////////////////////////////////////////////////////////// end contenido cuadros ROW  -->
</div>




<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>