<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/gallery.css'); ?>">
<script src="<?= base_url('assets/sources/js/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/sources/js/Loui.js'); ?>"></script>
<div class="blog_bg">
  <h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Gallery</h1>
</div>

<div class="container ourGallery">
 <h2><strong>Our Gallery</strong></h2>
</div>

<div class="container">
  <section class="row">
    <div class="col-md-4 col-md-offset-4 img-gal text-center">
      <div class="col-xs-3 option" id="optionAll">
        <img src="<?= base_url('assets/sources/img/Mirtha/photos.png'); ?>">
        <p>All Photos</p>
      </div>
      <div class="col-xs-3 option" id="restaurantOpt">
        <img src="<?= base_url('assets/sources/img/Mirtha/restaurant.png'); ?>">
        <p>Restaurant</p>
      </div>
      <div class="col-xs-3 option" id="foodOpt">
        <img  src="<?= base_url('assets/sources/img/Mirtha/food.png'); ?>">
        <p>Food</p>
      </div>
      <div class="col-xs-3 img-gal-end option" id="dessertsOpt">
        <img  src="<?= base_url('assets/sources/img/Mirtha/desserts.png'); ?>">
        <p>Desserts</p>
      </div>
    </div>
  </section>
</div>

<div class="container">
	<div class="container FoodOptions row" id="FoodOptions">
	    <div class="menu-gallery1 restaurant">
	    	<?php foreach ($rest as $g) { ?>
	    		<img src="<?= base_url('assets/sources/img/galeria/Restaurant/'.$g->nombre) ?>">
	    	<?php } ?>
	    </div>

	    <div class="menu-gallery1 food">
	    	<?php foreach ($comida as $g) { ?>
	    		<img src="<?= base_url('assets/sources/img/galeria/Comida/'.$g->nombre) ?>">
	    	<?php } ?>
	    </div>
	    <div class="menu-gallery1 desserts">
	    	<?php foreach ($postre as $g) { ?>
	    		<img src="<?= base_url('assets/sources/img/galeria/Postres/'.$g->nombre) ?>">
	    	<?php } ?>
	    </div>
	</div>
</div>
<div class="opening">
  <?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
</div>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>



