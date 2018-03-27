<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/sources/css/kemish.css'); ?>">
<?php $this->load->view('FrontEnd/Global/generales'); ?>

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?php echo base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?php echo base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha"> Blog</h1>
</div>
  
<div class="container">
  <section class="row">
    <div class="col-md-7 col-md-offset-1 pictures">
      <?php $this->load->view('FrontEnd/Global/readMore'); ?>
      <?php foreach ($blogs as $bl) {  ?>
      
      <div class="row">
        <img id="imgBlog" src="<?= base_url().$bl->foto; ?>">
        <div class="col-md-2">
          <div class="date">
            <div>
              <?= GetFechaV2($bl->fecha); ?>
            </div>
          </div>
        </div>
        <div class="col-md-10">
          <h2 id="titlePost"><?= $bl->titulo; ?></h2>
          <p><?= $bl->contenido; ?></p>

      
          <div class="options op-pager col-xs-8">
            <div class="pager">
              <button type="button" class="pull-left readMore" id="<?= $bl->id; ?>"><span>READ MORE</span></button>
              <img class="pull-right" src="<?= base_url('assets/sources/img/like.png'); ?>" alt="likes" >
            </div>
          </div>
          <div class="options col-xs-4">
            <img class="pull-right" src="<?= base_url('assets/sources/img/redes.png'); ?>" alt="Redes" >
          </div>



        </div>
      </div>

      <?php } ?>
      
    </div>

    <div class="col-md-3 category">
      <section class="row">
        <?php $this->load->view('FrontEnd/Global/category'); ?>
      </section>
      <section class="row">
        <?php $this->load->view('FrontEnd/Global/recentPost'); ?>
      </section>
    </div>
  </section>
</div>
<form method="post" action="<?= base_url('index.php/restaurant/Blogs/MoreDetails'); ?>" id="sendToDetail">
  <input type="hidden" id="idToFind" name="idToFind">
</form>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script>
  $('.readMore').click(function(){
    $('#idToFind').val(this.id);
    $('#sendToDetail').submit();
  });
</script>