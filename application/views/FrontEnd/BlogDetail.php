<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/sources/css/pilu.css'); ?>">
	<?php $this->load->view('FrontEnd/Global/generales'); ?>

	<div class="header" id="blogDetail">
		<img src="<?= base_url('assets/sources/img/imgHeaderBlogDetail4.jpg'); ?>">
		<img src="<?= base_url('assets/sources/img/niu.png'); ?>" id="img">
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 image" >
				<img src="<?= base_url().$blog[0]->foto; ?>">
				<div class="col-md-2 cuadro-naranja">
					<div>
						<?= GetFechaV2($blog[0]->fecha); ?>
					</div>
				</div>
				<div class="col-md-10">
					<h3><strong><?= $blog[0]->titulo; ?></strong></h3>
					<p><?= $blog[0]->contenido; ?></p>
				</div>
			</div>
			<div class="col-md-3 category">
		      <section class="row">
		        <?php $this->load->view('FrontEnd/Global/category'); ?>
		      </section>
		      <section class="row">
		        <?php $this->load->view('FrontEnd/Global/recentPost'); ?>
		      </section>
			</div>
		</div>

		<div class="row"><br><br><br>
			<div class="col-sm-6 col-sm-offset-3">
				<?php $this->load->view('FrontEnd/Global/prev-next'); ?>
			</div>
			<form method="post" action="<?= base_url('index.php/restaurant/Blogs/MoreDetails'); ?>" id="sendToDetail">
	  			<input type="hidden" id="idToFind" name="idToFind">
			</form>
			<form method="post" action="<?= base_url('index.php/restaurant/Blogs/ChangeCategory'); ?>" id="ChangeCat">
			  <input type="hidden" id="idToChange" name="idToChange">
			</form>
		</div>
	</div>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>
<script src="<?= base_url('assets/sources/js/restaurant/blogDetail.js'); ?>"></script>