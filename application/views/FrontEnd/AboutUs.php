<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/TomEliezer.css'); ?>">
	<div class="blog_bg">
  		<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha"> About Us</h1>
  	</div>

	<div class="container ourHistory">
			<h2><strong><?= $llave[0]->titulo ?></strong></h2>
			<p><?= $llave[0]->contenido ?></p>
	</div>
	<div class="container ourHotel" id="ourHotel">
		<img src="<?php echo base_url('assets/sources/img/'.$llave[0]->foto);?>">
		<p>OUR HOTEL</p>
	</div>
	
	<div class="container ourCooks" id="ourCooks">
		<h3>Our Cooks</h3>
		<div id="myCarousel" class=" container-gallery carousel slide" data-ride="carousel">
	
		    <!-- Wrapper for slides  Poner codigo para jalar las imagenes paps-->
		    <div class="carousel-inner">
		      <div class="item active">
		      	<div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef1.jpg'); ?>" id="chefImg">
					<hr>
					<div class="ourCooks-desc " id="chefText">Ferran Adria</div>
				</div>
				 <div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef2.jpg'); ?>">
					<hr>
					<div class="ourCooks-desc ">Gordon Ramsay</div>
				</div>
				 <div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef3.jpg'); ?>">
					<hr>
					<div class="ourCooks-desc ">Alain Ducasse</div>
				</div>
				 <div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef4.jpg'); ?>">
					<hr>
					<div class="ourCooks-desc ">Paul Bocuse</div>
				</div>
		      </div>
		      <div class="item">
		        <div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef5.jpg'); ?>"  >
					<hr>
					<div class="ourCooks-desc ">Jamie Oliver</div>
				</div>
		      </div>
		      <div class="item">
		        <div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef6.jpg'); ?>">
					<hr>
					<div class="ourCooks-desc ">Juan Maria Arzak</div>
				</div>
		        <div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/chef7.jpg'); ?>">
					<hr>
					<div class="ourCooks-desc ">Massino Bottura</div>
				</div>
		      </div>
		    </div>
		    		    <!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

	  	</div>
	</div>

	<div class="container speciality">
		<div class="imgSpeciality">
			<img src="<?php echo base_url('assets/sources/img/speciality/Speciality.jpg'); ?>">
		</div>
		<div class="textSpeciality" style="background-image: ">
			<h3 class="titleSpeciality" id="titleSpeciality">Speciality</h3>
			<p class="pointSpeciality" id="point1Speciality">Excelent Service</p>
			<p  id="description1Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<p class="pointSpeciality" id="point3Speciality">FREE HOME DELIVERY</p>
			<p id="description2Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<p class="pointSpeciality" id="point3Speciality">FREE HOME DELIVERY</p>
			<p id="description3Speciality">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
	</div>
	<hr>

<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>
