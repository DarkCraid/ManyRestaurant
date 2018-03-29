<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<?php $this->load->view('FrontEnd/Global/generales'); ?>

<link rel="stylesheet" href="<?= base_url('assets/sources/css/Admin/featured.css'); ?>">


  <div class="content-wrapper">
    <section class="content-header">
      	<section class="content">
	        <div class="row box">
    			<div class="container">
    				<div class="col-md-12"><h3>Featured Events</h3></div>
    				
    			</div>
	        </div>
	        <div class="row box">
    			<div class="col-md-5">
            <table class="table table-hover no-margin" id="todo">
              <thead>
                  <tr>
                    <th>TITLE</th>
                    <th>ACTIONS</th>
                  </tr>
              </thead>
              <tbody id="contenido_tabla"></tbody>
            </table>
          </div>
          <div class="col-md-2">
            <div class="imgArrow">
              <img src="<?= base_url('assets/sources/icons/arrows.jpg'); ?>" alt="arrows">
            </div>
          </div>
          <div class="col-md-5">
            <table class="table table-hover no-margin" id="featured">
              <thead>
                  <tr>
                    <th>TITLE</th>
                    <th>ACTIONS</th>
                  </tr>
              </thead>
              <tbody id="contenido_tabla"></tbody>
            </table>
          </div>
	        </div>
		</section>
    </section>

  </div>



<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>
<script src="<?php echo base_url('assets/sources/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/sources/js/dataTables.bootstrap.min.js'); ?>"></script>

<script src="<?= base_url('assets/sources/js/generales.js'); ?>"></script>
<script src="<?= base_url('assets/sources/js/Admin/featured.js') ?>"></script>