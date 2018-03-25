<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sources/css/Kirey.css');?>">

	<div class="header">
		<img src="<?php echo base_url('assets/sources/img/primera.jpg'); ?>" width="100%" heigh="100px">
		<img class="titleIm" src="<?php echo base_url('assets/sources/img/titulo.png'); ?>" width="100%" heigh="100px">
	</div>

	
	<div id="container-menu">
		<ul class="menu">
			<li><img class="lineas" src="<?php echo base_url('assets/sources/img/menu.png'); ?>" width="50" heigh="50px">
				<ul >
					<li><a><img src="<?php echo base_url('assets/sources/img/1.png'); ?>" width="40%" heigh="40px">
					BREACKFAST</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/2.png'); ?>" width="40%" heigh="40px">
					STARTER</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/3.png'); ?>" width="40%" heigh="40px">
					LUNCH</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/4.png'); ?>" width="40%" heigh="40px">
					DINNNER</a></li>
					<li><a><img  src="<?php echo base_url('assets/sources/img/5.png'); ?>" width="40%" heigh="40px">
					DISSERT</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<h2 class="subir">Our Spscial Recipies</h2>
	<p class="cuerpo">Our restaurant has the recipes that highlight who we are, the great taste for food, you will find the best recipes in the house.</p>
	<div class="central" >
		<div id="cuadro1">
			<div class="cuadroFoto1">
				<img src="<?php echo base_url('assets/sources/img/li1.jpg'); ?>" width="100%" heigh="100px">
			</div>
			<div class="lado1">
				<label class="titulos"><b>Salad</label></b><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>"><br><br>
				<label>It is a special dish of our restaurant that tastes the customer.</label><br>
				<button class="boton1">DETALLES</button>
			</div>
		</div>	

		<div>
			<div class="cuadroFoto2">
				<img src="<?php echo base_url('assets/sources/img/li2.jpg'); ?>" width="100%" heigh="100px">
			</div>
			<div class="lado2">
				<label class="titulos"><b>Mashed Potatoes</label></b><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>"><br><br>
				<label>It is a special dish of our restaurant that tastes the customer.</label><br>
				<button class="boton2">DETALLES</button>
			</div>
		</div>

		<div>
			<div class="cuadroFoto3">
				<img src="<?php echo base_url('assets/sources/img/li3.jpg'); ?>" width="100%" heigh="100px">
			</div>
			<div class="lado3">
				<label class="titulos"><b>Flutes</label></b>
				<img src="<?php echo base_url('assets/sources/img/estrella2.png'); ?>"><br><br>
				<label>It is a special dish of our restaurant that tastes the customer.</label><br>
				<button class="boton3">DETALLES</button>
			</div>
		</div>

		<div>
			<div class="cuadroFoto4">
				<img src="<?php echo base_url('assets/sources/img/li4.jpg'); ?>" width="100%" heigh="100px">
			</div>
			<div class="lado4">
				<label class="titulos"><b>Meats</label></b><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>"><br><br>
				<label>It is a special dish of our restaurant that tastes the customer.</label><br>
				<button class="boton4">DETALLES</button>
			</div>
		</div>

		<div>
			<div class="cuadroFoto5">
				<img src="<?php echo base_url('assets/sources/img/li5.jpg'); ?>" width="100%" heigh="100px">
			</div>
			<div class="lado5">
				<label class="titulos"><b>Cakes</label></b><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>"><br><br>
				<label>It is a special dish of our restaurant that tastes the customer.</label><br>
				<button class="boton5">DETALLES</button>
			</div>
		</div>

		<div>
			<div class="cuadroFoto6">
				<img src="<?php echo base_url('assets/sources/img/li6.jpg'); ?>" width="100%" heigh="100px">
			</div>
			<div class="lado6">
				<label class="titulos"><b>Chiken</label></b><br>
				<img src="<?php echo base_url('assets/sources/img/estrellas.png'); ?>"><br><br>
				<label>It is a special dish of our restaurant that tastes the customer.</label><br>
				<button class="boton6">DETALLES</button>
			</div>
		</div>
	</div>



<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>