<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

	<div class="content-wrapper">
    <section class="content-header">
    	<h3>Gallery</h3>
    	<button class="btn btn-primary pull-right" id="newOption" style="position: relative;top: -20px; right:30px;">Create new gallery option</button>
      	<section class="content">
	        <div class="row box">
    			<div class="container">
    				<table class="table table-hover no-margin" id="galleryTab">
		              <thead>
		                  <tr>
		                    <th>ICON</th>
		                    <th>CATEGORY NAME</th>
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
<script src="<?= base_url('assets/sources/js/Admin/galleryAdmin.js'); ?>"></script>
