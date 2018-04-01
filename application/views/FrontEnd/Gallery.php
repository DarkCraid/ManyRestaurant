<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/gallery.css'); ?>">

<div class="blog_bg">
  <h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Gallery</h1>
</div>

<div class="container">
  <section class="row text-center">
    <h2><strong>Our Gallery</strong></h2>
  </section>
  <section class="row menuG text-center">
    <div class="contG">
      <?php $pos=1; foreach ($galeria as $gal) {?>
      <div class="opcion <?php if($pos==count($galeria)){echo 'without';} ?>" >
        <img class="imgG" src="<?= base_url('assets/sources/icons/gallery/').$gal->icono; ?>" alt="icon" id="<?= $gal->id; ?>">
        <p><?= $gal->categoria; ?></p>
      </div>
      <?php $pos++;} ?>
      
    </div>

  </section>
  <section class="row">
    <div class="rowG"> 
      <div class="column" id="col1"></div>
      <div class="column" id="col2"></div>
      <div class="column" id="col3"></div>
      <div class="column" id="col4"></div>
    </div>
  </section>
</div>

<br><br><br>
<div class="opening">
  <?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
</div>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>



<script src="<?= base_url('assets/sources/js/restaurant/gallery.js'); ?>"></script>