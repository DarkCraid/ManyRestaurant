<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/gallery.css'); ?>">
<div class="blog_bg">
  <h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Gallery</h1>
</div>

<div class="container ourGallery">
 <h2><strong>Our Gallery</strong></h2>
</div>

<div class="container">
  <section class="row">
    <div class="col-md-4 col-md-offset-4 img-gal text-center">
      <div class="col-xs-3">
        <img src="<?= base_url('assets/sources/img/Mirtha/photos.png'); ?>">
        <p>All Photos</p>
      </div>
      <div class="col-xs-3">
        <img src="<?= base_url('assets/sources/img/Mirtha/restaurant.png'); ?>">
        <p>Restaurant</p>
      </div>
      <div class="col-xs-3">
        <img  src="<?= base_url('assets/sources/img/Mirtha/food.png'); ?>">
        <p>Food</p>
      </div>
      <div class="col-xs-3 img-gal-end">
        <img  src="<?= base_url('assets/sources/img/Mirtha/desserts.png'); ?>">
        <p>Desserts</p>
      </div>
    </div>
  </section>
</div>

<div class="container">
  <section class="row">
    <div class="col-sm-6">
      <img id="img-dinamica" src="<?= base_url('assets/sources/img/Mirtha/img.png'); ?>"></div>
    <div class="col-sm-6">
      <img id="img-dinamica" src="<?= base_url('assets/sources/img/Mirtha/img.png'); ?>"></div>
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



