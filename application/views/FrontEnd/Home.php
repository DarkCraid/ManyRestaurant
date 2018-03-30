<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet"  href="<?= base_url('assets/sources/css/home.css'); ?>">
  
<div class="header">
    <div  id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= base_url('assets/sources/img/defaultRest.jpg'); ?>">
      </div>
      <div  class="item">
        <img  src="<?= base_url('assets/sources/img/galeria1.jpg'); ?>">
      </div>
      <div  class="item">
        <img  src="<?= base_url('assets/sources/img/galeria2.jpg');?>">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <div class="texto">
    <p class="title">Teast your fav dish<br>from luxury restaurent.</p>
    <img src="<?= base_url('assets/sources/icons/call.png');?>" alt="">
    <p class="contact">Call us and book your table<br>1-008 005 006</p>
  </div>
</div>

<div class="container">
  <section class="row">
    <div class="col-md-5 col-md-offset-1"><h3 class="titleFoodMenu">Food menu</h3></div>
    <div class="col-md-5"><h3>Today Special</h3></div>
  </section>
  <section class="row">
    <div class="container">
      <div class="col-md-5 col-md-offset-1 lista">
        <ol>
          <?php foreach (array(1,2,3,4,5,6) as &$key) {  ?>
          <li>
            <p>asd <br>asdeesfr</p>
            <strong><span>$</span>345</strong>
          </li>
          <?php } ?>
        </ol>
      </div>
      <div class="col-md-5">
        <div class="left-c cuadro">
          <img src="<?= base_url('assets/sources/img/galeria2.jpg'); ?>" alt="">
          <p>texto<br>$345</p>
        </div>
        <div class="right-c cuadro">
          <img src="<?= base_url('assets/sources/img/defaultRest.jpg'); ?>" alt="">
          <p>texto<br>$345</p>
        </div>
      </div>
    </div>
  </section>
  <section class="row">
    <div class="container">
      <div class="col-md-5 col-md-offset-1">
        <button class="btn explore">Explor food menu</button>
      </div>
    </div>
  </section>
</div>




<div class="reserve">
  <h2 class="text-center">Reserve your table</h2>
  <div class="container" >
    <div class="row form-group inp">
      <div class="col-md-4 col-md-offset-2">
        <input type="text" class="form-control" placeholder="Name*">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Email address*">
      </div>
    </div>
    <div class="row form-group inp">
      <div class="col-md-4 col-md-offset-2">
        <input type="text" class="form-control" placeholder="Time*">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Date*">
      </div>
    </div>
    <div class="row form-group inp">
      <div class="col-md-4 col-md-offset-2">
        <input type="text" class="form-control" placeholder="Guests*">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Phone*">
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-2 col-md-offset-2"><br>
        <button class="btn explore">Make reservation</button>
      </div>
      <div class="col-md-6 callP">
        <div class="call col-xs-4"><p>You can also call<br>for a reservation</p></div>
        <div class="col-xs-6 text-left"><p>1-007 000 005</p></div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <section class="row happy">
    <h2 class="text-center">Happy Clients</h2>
    <div class="col-xs-10 col-xs-offset-1 carousel slide vertical" id="myCarouselV">
      <ol class="carousel-indicators indicatorCar">
        <li data-target="#myCarouselV" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselV" data-slide-to="1" class="active"></li>
        <li data-target="#myCarouselV" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner contenidoCarV">
      <div class="active item">
        <div class="col-md-3" >
          <img src="<?= base_url('assets/sources/img/galeria2.jpg'); ?>" alt="">
        </div>
        <div class="col-md-9" >
          <br>bbb
        </div>
      </div>
      <div class="item">
        <div class="col-md-3" >
          <img src="<?= base_url('assets/sources/img/defaultRest.jpg'); ?>" alt="">
        </div>
        <div class="col-md-9" >
          <br>d
        </div>
      </div>
      <div class="item">
        <div class="col-md-3" >
          <img src="<?= base_url('assets/sources/img/galeria1.jpg'); ?>" alt="">
        </div>
        <div class="col-md-9" >
          <br>oo
        </div>
      </div>
    </div>

<a class="left carousel-control carCtrl" href="#myCarouselV" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control carCtrl" href="#myCarouselV" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      
    </div>
  </section>
</div>

<div class="ourCooks">
  <br>
</div>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>

<script>
  $('.carousel').carousel({
  interval: 3000
});
</script>