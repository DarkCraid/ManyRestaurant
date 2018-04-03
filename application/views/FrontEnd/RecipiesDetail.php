<?php $this->load->view('FrontEnd/Global/Header'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/Sheyla.css');?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Recipie Details</h1>
</div>
<input type="hidden" id="IdOb" name="IdOb" value="<?= $_POST['IdOb'] ?>" />
<?php 
    if(empty($_POST['IdOb']))
        redirect('http://localhost/ManyRestaurant/index.php/Restaurante/Recipies');
?>

<!--div class="header">
		<img src="<?php echo base_url('assets/sources/img/detalles.jpg'); ?>" width="400px" heigh="1000px">	
	</div>-->


<div class="container">
<section class="row">
	<div class="container">
		<div>
			<div class="recipie">
				<label ><strong id="nombreReceta"></strong></label><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>" width="100px" heigh="100px">
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
			<div class="col-md-8 col-md-offset-2 ImgPrincipal">
				<img id="DataImageReceta" src="">
					<div class="col-md-10 col-md-offset-1 datosImagen">
						<div class="col-md-4">
							<p><p id="timePreparacion"></p> M<br>Tiempo de preparación</p>
						</div>

						<div class="col-md-3">
							<p><p id="timeCoccion"></p> M<br>Tiempo de cocción</p> 
							
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
				<p id="Descripcion"></p>	
			</div>
			
		</div>
</section>

<section class="row">
	<div class="container">
			<div class="ingredients" >
				<p>Ingredientes</p>
				<div id="ContIngredientes_"></div>
			</div>
		</div>
</section>
</div>

<section>
	<div class="contenedor">
		<div class="col-md-5 col-md-offset-3 pasos">
			<h3>Food Step</h3>
			<div class="container-fluid steps" id="PasosCont"></div>
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
