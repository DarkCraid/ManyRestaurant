<?php $this->load->view('FrontEnd/Global/Header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/Sheyla.css');?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Recipie Details</h1>
</div>

<!--div class="header">
		<img src="<?php echo base_url('assets/sources/img/detalles.jpg'); ?>" width="400px" heigh="1000px">	
	</div>-->


<div class="container">
<section class="row">
	<div class="container">
		<div>
			<div class="recipie">
				<label id="nombreReceta"><strong>PAKODA CHATNY</strong></label><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px">
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
			<div class="col-md-8 col-md-offset-2 ImgPrincipal">
				<img src="<?php echo base_url('assets/sources/img/platillo.jpg'); ?>">
					<div class="col-md-10 col-md-offset-1 datosImagen">
						<div class="col-md-4">
							<p>15 M<br>Tiempo de preparación</p>
						</div>

						<div class="col-md-3">
							<p>30 M<br>Tiempo de cocción</p> 
							
						</div>

						<div class="col-md-3 col-md-offset-2 download pull-right">
							<img src="<?php echo base_url('assets/sources/img/pdf.png'); ?>" width="40px" heigh="40px">
							<p>Download<br>Receta de comida</p>
						</div>
					</div>
			</div>
		</div>
</section>

<section class="row">
		<div class="col-md-8 col-md-offset-2 text-muted">
			<div class="col-md-11 col-md-offset-1 dateDe">
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>	
			</div>
			
		</div>
</section>

<section class="row">
	<div class="container">
			<div class="ingredients" >

				<p id="ingredientes">Ingredientes</p>

				<p><b><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
				<p><img src="<?php echo base_url('assets/sources/img/check.png'); ?>" width="50px" heigh="50px"> 1/2 taza de limón</p>
			</div>
		</div>
</section>
</div>

<section>
	<div class="contenedor">
		<div class="col-md-5 col-md-offset-3 pasos">
			<h3>Food Step</h3>
				<div class="container-fluid steps">
						<div class="row step">
							<div class="col-xs-2">
								<div><p>1<br>STEP</p></div>
							</div>
							<div class="col-xs-10">
								<p>consectetur adipisicing elit. Deleniti tempora nisi perspiciatis voluptatum labore dolore quae, quod itaque optio quos in recusandae, nulla similique omnis praesentium eveniet a consectetur, accusamus!</p>
							</div>
						</div>
						<div class="row step">
							<div class="col-xs-2">
								<div><p>2<br>STEP</p></div>
							</div>
							<div class="col-xs-10">
								<p>consectetur adipisicing elit. Et rerum nulla veritatis soluta voluptate, voluptatum aliq iste eum placeat quaerat, distinctio fuga pariatur in nobis qui?</p>
							</div>
						</div>
						<div class="row step">
							<div class="col-xs-2">
								<div><p>3<br>STEP</p></div>
							</div>
							<div class="col-xs-10">
								<p>consectetur adipisicing elit. Molestiae, ad iusto. Doloribus et iste commodi, aperiam illosam aspernatur quis vitae laborum!</p>
							</div>
						</div>
						<div class="row step">
							<div class="col-xs-2">
								<div><p>4<br>STEP</p></div>
							</div>
							<div class="col-xs-10">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nulla magnam aliquid enim molestiae ex, suscipit nesciunt aliquam in optio nemo odit, tenetur adipisci recusandae maiores possimus laboriosam libero. Id!</p>
							</div>
						</div>
				</div>
		</div>
	</div>
</section>






<div class="container">

		<div class="row cuadrosPic">
			<h2>Featured Recipies</h2>
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-4 img-reserv">
					<img src="<?= base_url('assets/sources/img/plato3.png'); ?>" alt="">
					<div class="col-xs-12 div-reserv">
						<h4><b>Pakoda Chatny</b></h4>
						<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad numquam illo consectetur aut maiores na</p>
						<button type="button" class="btn">RECIPE DETAILS</button>
					</div>
				</div>
				<div class="col-md-4 img-reserv">
					<img src="<?= base_url('assets/sources/img/plato2.png'); ?>" alt="">
					<div class="col-xs-12 div-reserv">
						<h4><b>Pakoda Chatny</b></h4>
						<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad numquam illo consectetur aut maiores na</p>
						<button type="button" class="btn">RECIPE DETAILS</button>
					</div>
				</div>
				<div class="col-md-4 img-reserv">
					<img src="<?= base_url('assets/sources/img/plato1.png'); ?>" alt="">
					<div class="col-xs-12 div-reserv">
						<h4><b>Pakoda Chatny</b></h4>
						<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repellendus neque nesciuntdio ea.</p>
						<button type="button" class="btn">RECIPE DETAILS</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>

<script src="<?= base_url('assets/sources/js/LoadDataRecipiesDetail.js');?>"></script>