<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<?php $this->load->view('FrontEnd/Global/generales'); ?>

<link rel="stylesheet" href="<?= base_url('assets/sources/css/Admin/events.css'); ?>">


  <div class="content-wrapper">
    <section class="content-header">
      	<section class="content">
	        <div class="row box">
    			<div class="container">
    				<div class="col-md-12"><h3>Featured Events</h3></div>
    				
    			</div>
	        </div>
	        <div class="row box">
    			<?php $this->load->view('FrontEnd/Global/featured');?>
	        </div>
		</section>
    </section>

  </div>



<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>

<script src="<?= base_url('assets/sources/js/Admin/events.js'); ?>"></script>


