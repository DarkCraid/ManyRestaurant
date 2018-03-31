<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/TomEliezer.css'); ?>">
	<div class="blog_bg">
  		<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha"> About Us</h1>
  	</div>

	<div class="container ourHistory">
			<h2><strong>Our History</strong></h2>
			<p><?= $historia[0]->historia ?></p>
	</div>
	<div class="container ourHotel" id="ourHotel">
		<img src="<?php echo base_url('assets/sources/img/restaurant/'.$historia[0]->foto);?>">
		<p>OUR HOTEL</p>
	</div>
	
	<div class="container ourCooks" id="ourCooks">
		<h3>Our Cooks</h3>
		<div id="myCarousel" class=" container-gallery carousel slide" data-ride="carousel">
	
		    <!-- Wrapper for slides  Poner codigo para jalar las imagenes paps-->
		    <div class="carousel-inner">

			<?php 
				$contador=0;
				$ciclo=0;
				$fin=false;
				$totalCiclos=0;

				while(!$fin){
			?>


		      <div class="item <?php if($contador==0){echo 'active';} ?>">
				<?php for ($i=$ciclo; $i < $ciclo+4; $i++) {  ?>

				<?php if($contador<count($chefs)){ ?>
		      	<div class="ourCooks-gallery">
					<img src="<?php echo base_url('assets/sources/img/chefs/').$chefs[$i]->foto; ?>" id="chefImg">
					<hr>
					<div class="ourCooks-desc " id="chefText"><?= $chefs[$i]->nombre; ?></div>
				</div>
				<?php 
					$contador++;
				}else{
					$fin=true;
					break;
				} ?>

				<?php } $ciclo+=4; $totalCiclos++; ?>
		      </div>


			<?php } ?>

		    </div>
		    

			<ol class="carousel-indicators">
				<?php for ($a=0; $a < $totalCiclos ; $a++) {  ?>
				<li data-target="#myCarousel" data-slide-to="<?= $a ?>" 
					class="<?php if($a==0){echo 'active';} ?>"></li>
				<?php } ?>
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

<script>
	$('.ourCooks-gallery').click(function(){
		window.location.replace('<?= base_url('index.php/restaurante/chef'); ?>');
	});
</script>