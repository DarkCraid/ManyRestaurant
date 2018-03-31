<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet"  href="<?= base_url('assets/sources/css/home.css'); ?>">
  <script src="<?= base_url('assets/sources/js/jssor.slider-27.1.0.min.js'); ?>"></script>

  <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>







  
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
          <?php foreach ($menu as &$m) {  ?>
          <li>
            <p><?= $m->nombre; ?> <br><?= $m->descripcion; ?></p>
            <strong><span>$</span><?= $m->precio;?></strong>
          </li>
          <?php } ?>
        </ol>
      </div>
      <div class="col-md-5">
        <div class="left-c cuadro">
          <img src="<?= base_url('assets/sources/img/food/').$Espe[0]->imagen; ?>" alt="">
          <p><?= $Espe[0]->nombre; ?><br>$ <?= $Espe[0]->precio; ?></p>
        </div>
        <div class="right-c cuadro">
          <img src="<?= base_url('assets/sources/img/food/').$Espe[1]->imagen; ?>" alt="">
          <p><?= $Espe[1]->nombre; ?><br>$ <?= $Espe[1]->precio; ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="row">
    <div class="container">
      <div class="col-md-5 col-md-offset-1">
        <a href="<?= base_url('index.php/Restaurante/menu'); ?>"><button class="btn explore">Explor food menu</button></a>
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
        <li data-target="#myCarouselV" data-slide-to="1" class=""></li>
        <li data-target="#myCarouselV" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner contenidoCarV">
      <div class="active item">
        <div class="col-md-3" >
          <img src="<?= base_url('assets/sources/img/galeria2.jpg'); ?>" alt="">
        </div>
        <div class="col-md-9" >
          <div class="row">
            <div class="col-xs-1"><img src="<?= base_url('assets/sources/icons/comi1.png'); ?>"></div>
            <p class="col-xs-9 happyClientText">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. Expedita mollitia sed, reprehenderit fugit, doloribus voluptatibus earum ducimus ipsam. Nulla placeat temporibus nostrum quae dolores dignissimos ratione iure at ab veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A at autem quasi praesentium cum dolorum ipsum maiores atque, ipsam expedita totam nisi, aspernatur dolore similique rerum assumenda vel, quae ex! </p>
            <div class="col-xs-1 com2"><img src="<?= base_url('assets/sources/icons/comi2.png'); ?>"></div>
          </div>
          <div class="row">
            <div class="col-xs-offset-1 col-xs-4 nameVato">nombre del vato</div>
          </div>



        </div>
      </div>
      <div class="item">
        <div class="col-md-3" >
          <img src="<?= base_url('assets/sources/img/defaultRest.jpg'); ?>" alt="">
        </div>
        <div class="col-md-9" >
          




        </div>
      </div>
      <div class="item">
        <div class="col-md-3" >
          <img src="<?= base_url('assets/sources/img/galeria1.jpg'); ?>" alt="">
        </div>
        <div class="col-md-9" >
          




        </div>
      </div>
    </div>

<a class="left carousel-control carCtrl" href="#myCarouselV" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control carCtrl" href="#myCarouselV" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      
    </div>
  </section>
</div>

<div class="ourCooks">
  <h3 class="text-center">Our Gallery</h3>
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:200px;overflow:hidden;visibility:hidden;">
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:230px;overflow:hidden;">
            
            <?php foreach (array(1,2,3,4,5,6,7,8,9,10) as &$arr) {  ?>
            <div data-p="43.75">
                <img data-u="image" src="<?= base_url('assets/sources/img/galeria1.jpg'); ?>" />
            </div>
            <?php } ?>
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
    </div>
    

  </div>
</div>

<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script type="text/javascript">jssor_1_slider_init();</script>