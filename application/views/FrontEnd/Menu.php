<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/sources/css/TomEliezer.css'); ?>">
	<script src="<?= base_url('assets/sources/js/jquery.min.js');?>" ></script>


	<div class="blog_bg">

		<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Menu</h1>
  	</div>
	<div class="container">
		<section class="row">
			<h2 class="text-center">Menu Grid View</h2>
		</section>

		<section class="row">
			<center id="MenuAll">
			</center>
		</section>
	</div>

	<hr>

	<div class="container FoodOptions row" id="FoodOptions">
		<div class="col-md-offset-1 " id="TodaComida">

		</div>
	</div>	

	<div class="speciality grey">
		<div class="imgSpeciality">
			<img src="../../assets/sources/img/speciality/Speciality.jpg">
		</div>
		<div class="textSpeciality" >
			<h3 class="titleSpeciality" id="titleSpeciality">Speciality</h3>
			<p class="pointSpeciality" id="point1Speciality">Excelent Service</p>
			<p  id="description1Speciality">Lorem ipsum dolor sit amt enim ad minim veniam</p>
			<p class="pointSpeciality" id="point3Speciality">FREE HOME DELIVERY</p>
			<p id="description2Speciality">Lorem ipsum dolor sit amqua. Ut enim ad minim veniam</p>
			<p class="pointSpeciality" id="point3Speciality">FREE HOME DELIVERY</p>
			<p id="description3Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
	</div>
	<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>

<script src="<?= base_url('assets/sources/js/LoadDataMenu.js');?>"></script>
