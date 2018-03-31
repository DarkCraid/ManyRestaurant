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
      
      <?php $totalEv=0; $first=1;
         foreach ($blogs as &$bl) { 
          if($totalEv==0)
            $first=$bl->id;
          if($totalEv<3){ ?>
      
      <div class="row">
        <img id="imgBlog" src="<?= base_url('assets/sources/img/blogs/').$bl->foto; ?>">
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

      <?php $totalEv++; } } $sec=((int)$first+3); $ter=((int)$sec+3);?>
      
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





<div class="container" id="pagination">
  <div class="row">
    <div class="options col-xs-12">
      <div class="col-md-6 col-md-offset-3">
        <div class="pager">
          <button type="button" class="prev-next pull-left" id="<?= $ter; ?>"><span>< Next</span></button>
          <button type="button" class="prev-next pull-left midle" id="<?= $first; ?>">
            <span><?= $pager['uno']; ?></span></button>
          <button type="button" class="prev-next pull-left midle" id="<?= $sec; ?>">
            <span><?= $pager['dos']; ?></span></button>
          <?php if(count($blogs)>6){?>
          <button type="button" class="prev-next pull-left midle" id="<?= $ter; ?>">
            <span><?= $pager['tres']; ?></span></button>
          <?php } 
          $prev=1; 
          ((count($blogs)>0 && (int)$first!=1)? $prev = ((int)$first-6):$prev = 1);
          (($prev<0)? $prev=1:$prev=$prev); 
          ?>
          <button type="button" class="prev-next pull-left" 
            id="<?= $prev; ?>">
            <span>Prev ></span></button>
        </div>
        <form method="post" action="<?= base_url('index.php/restaurant/Blogs/changePage'); ?>" id="sendToPage">
          <input type="hidden" id="dataPageF" name="dataPageF">
        </form>
      </div>
    </div>
  </div>
</div>





<form method="post" action="<?= base_url('index.php/restaurant/Blogs/MoreDetails'); ?>" id="sendToDetail">
  <input type="hidden" id="idToFind" name="idToFind">
</form>
<form method="post" action="<?= base_url('index.php/restaurant/Blogs/ChangeCategory'); ?>" id="ChangeCat">
  <input type="hidden" id="idToChange" name="idToChange">
</form>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script>var cantidad = <?= count($blogs); ?></script>
<script>
  $(document).ready(function(){
    if(cantidad==0){
      $('.midle').attr('disabled',true);
      $('.midle').css('background','#f3f3f3');
    }
  });

  $('.readMore').click(function(){
    $('#idToFind').val(this.id);
    $('#sendToDetail').submit();
  });

  $('.catg').click(function(){
    $('#idToChange').val(this.id);
    $('#ChangeCat').submit();
  });

  $('.prev-next').click(function(){
  var data  =   new Object();
  data.uno  = this.id;
  data.dos  = parseInt(this.id)+3;
  data.tres = parseInt(this.id)+6;
  $('#dataPageF').val(JSON.stringify(data));
  console.log(data);
  $('#sendToPage').submit();
});
</script>