<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/sources/css/TomEliezer.css'); ?>">
	<script src="<?= base_url('assets/sources/js/jquery.min.js');?>" ></script>
	<script src="<?= base_url('assets/sources/js/TomEliezer.js');?>"></script>
	<div class="blog_bg">

		<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Menu</h1>
  	</div>
	<div class="container">
		<section class="row">
			<h2 class="text-center">Menu Grid View</h2>
		</section>

		<section class="row">
			<center>
				<div class="option" id="optionAll">
					<img src="../../assets/sources/img/icon_all.png">
					<h4>All</h4>
				</div>
				<div class="option" id="optionBreakfast">
					<img src="../../assets/sources/img/icon_breakfast.png">
					<h4>Breakfast</h4>
				</div>
				<div class="option" id="optionLunch">
					<img src="../../assets/sources/img/icon_lunch.png">
					<h4>Lunch</h4>
				</div>
				<div class="option" id="optionSnacks">
					<img src="../../assets/sources/img/icon_snacks.png">
					<h4>Snacks</h4>
				</div>
				<div class="option" id="optionPizza">
					<img src="../../assets/sources/img/icon_pizza.png">
					<h4>Pizza</h4>
				</div>
				<div class="option" id="optionSoups">
					<img src="../../assets/sources/img/icon_soups.png">
					<h4>Soups</h4>
				</div>
				<div class="option" id="optionDinner">
					<img src="../../assets/sources/img/icon_dinner.png">
					<h4>Dinner</h4>
				</div>
			</center>
		</section>
	</div>

	<hr>

	<div class="container FoodOptions row" id="FoodOptions">
		<div class="col-md-offset-1 ">
			<div class="menu-gallery pizza">
				<img src="../../assets/sources/img/food/pizza.jpg"  >
				<div class="menu-desc ">
					<h5><b>Pizza con peperoni</b><br><small>ta buena</small></h5>
					<hr>
					<p class="costFood">$68.00</p>
				</div>
			</div>
			<div class="menu-gallery soup" id="soup">
				<img src="../../assets/sources/img/food/sopa.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>caldo de pollo</b><br><small>Buena pa la gripe</small></h5>
					<hr>
					<p class="costFood">$68.00</p>
				</div>
			</div>
			<div class="menu-gallery snack" id="snack">
				<img src="../../assets/sources/img/food/creppa.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>creppa<b><br><small>Deliciosa y dulce!</small></h5>
					<hr>
					<p class="costFood">$30.00</p>
				</div>
			</div>
			<div class="menu-gallery pizza" id="pizza">
				<img src="../../assets/sources/img/food/pizza2.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>Pizza con salchica<b><br><small>Buena para la cruda!</small></h5>
					<p class="costFood">$100.00</p>
				</div>
			</div>
			<div class="menu-gallery lunch" id="lunch">
				<img src="../../assets/sources/img/food/mollete.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>mollete<b><br><small>Rico antojo mexicano!</small></h5>
						<p class="costFood">$10.00</p>
				</div>
			</div>
			<div class="menu-gallery snack" id="snack">
				<img src="../../assets/sources/img/food/hotcakes.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>hotcakes<b><br><small>Para un dulce desayuno!</small></h5>
					<p class="costFood">$15.00</p>
				</div>
			</div>
			<div class="menu-gallery dinner" id="dinner">
				<img src="../../assets/sources/img/food/chilaquiles.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>chilaquiles<b><br><small>el desayuno mas mexicano!</small></h5>
					<p class="costFood">$45.00</p>
				</div>
			</div>
			<div class="menu-gallery breakfast" id="breakfast" >
				<img src="../../assets/sources/img/food/ratatui.jpg"  >
				<hr>
				<div class="menu-desc ">
					<h5><b>ratatui<b><br><small>Como hecho en casa!</small></h5>
					<p class="costFood">$50.00</p>
				</div>
			</div>				
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
