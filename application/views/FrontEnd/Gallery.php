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

<div class="container FoodOptions row" id="FoodOptions">
  <section class="row">
    <div class="menu-gallery restaurant">
    	<?php foreach ($galeria as $g) { ?>
    		<img src="<?= base_url('assets/sources/img/galeria/Restaurant'.$g->nombre) ?>">
    	<?php } ?>
    </div>
    <div class="menu-gallery food">
    	<?php foreach ($galeria as $g) { ?>
    		<img src="<?= base_url('assets/sources/img/galeria/Comida'.$g->nombre) ?>">
    	<?php } ?>
    </div>
    <div class="menu-gallery desserts">
    	<?php foreach ($galeria as $g) { ?>
    		<img src="<?= base_url('assets/sources/img/galeria/Postres'.$g->nombre) ?>">
    	<?php } ?>
    </div>
  </section>
</div>

  <div class="container col-md-6 col-md-offset-3" style="margin-bottom: 10%; ">
	  <ul class="pagination">
	    <li><a href="#" style="background-color: #e2ad56">1</a></li>
	    <li><a href="#" style="background-color: #e2ad56">2</a></li>
	    <li><a href="#" style="background-color: #e2ad56">3</a></li>
	    <li><a href="#" style="background-color: #e2ad56">4</a></li>
	    <li><a href="#" style="background-color: #e2ad56">5</a></li>
	  </ul>
	</div>

<div class="opening">
  <?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
</div>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>



