<style>
	.ourCooks{background-image: url("img/backgroundOurCooks.png");margin-top: 10%; width: 100%; text-align: center; margin-left: auto; margin-right: auto;}
	.ourCooks h3{font-weight: bold;}
</style>

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