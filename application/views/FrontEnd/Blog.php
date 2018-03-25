<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/sources/css/kemish.css'); ?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha"> Blog</h1>
</div>
  
<div class="container">
  <section class="row">
    <div class="col-md-7 col-md-offset-1 pictures">
      
      <?php foreach (array(1,2,3) as &$value) { ?>

      <div class="row">
        <img id="imgBlog" src="<?= base_url('assets/sources/img/Deerek/02-1024x423.jpg'); ?>">
        <div class="col-md-2">
          <div class="date">
            <div>
              <strong>08</strong>
              <p>NOV-06</p>
            </div>
          </div>
        </div>
        <div class="col-md-10">
          <h2 id="titlePost">Aenean pharetra lectus utsto.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic molestiae perspiciatis dicta saepe, natus, nobis laudantium ea quam porro beatae, enim reiciendis, iste architecto distinctio iusto voluptatem error nostrum eveniet.</p>

          <?php $this->load->view('FrontEnd/Global/readMore'); ?>
        </div>
      </div>

      <?php } ?>
      
    </div>

    <div class="col-md-3 category">
      <section class="row">
        <h4>Category</h4>
        <ol class="lista2">
          <li>ALL FOODS</li>
          <li>VEGETABLES</li>
          <li>DELICIOUS FOOD</li>
          <li>SPECIAL DISHES</li>
          <li>JUICES</li> 
        </ol>
      </section>
      <section class="row">
        <?php $this->load->view('FrontEnd/Global/recentPost'); ?>
      </section>
    </div>
  </section>
</div>


<?php $this->load->view('FrontEnd/Global/Footer'); ?>