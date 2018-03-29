<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<link rel="stylesheet" href="<?= base_url('assets/sources/css/Admin/events.css'); ?>">


  <div class="content-wrapper">
    <section class="content-header">
      	<section class="content">
	        <div class="row box">
    			<div class="container">
    				<div class="col-md-2"><h3>Events</h3></div>
    				<div class="col-md-10 text-right">
    					<button class=" btn btn-success btnPrin">Add new event</button>
    					<button class=" btn btn-success btnPrin">Show events list</button><br><br>
    				</div>
    			</div>
	        </div>
			
	        <div class="row box">
	        	<div class="container" id="contentenido">
    				<div class="row add" style="display: none;">
    					<div class="col-md-12">
    						<form enctype="multipart/form-data" role="form" method="post" action="<?= base_url('index.php/Admin/Events/addEvent'); ?>"  id="addBlogForm">
    							<div class="col-md-4">
    								<img class="imagen" alt="img" id="imagenBlog" src="<?= base_url('assets/sources/img/principalPhoto.png') ?>">
    								<input type="file" name="fotoP" class="btn btn-success col-xs-12" onchange="readURL(this,'imagenBlog');" />
    								<hr>
    								<img class="imagen" alt="img" id="imgSeg" src="<?= base_url('assets/sources/img/secondary_p.png') ?>">
    								<input type="file" name="fotoS" class="btn btn-success col-xs-12" onchange="readURL(this,'imgSeg');" />
    							</div>
    							<div class="col-md-8">
    								<br>
    								<div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Title: </label>
					                    </div>
					                    <div class="col-md-10">
					                        <input maxlength="100" type="text" name="title" class="form-control" placeholder="*" required>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Date: </label>
					                    </div>
					                    <div class="col-md-3">
					                        <input maxlength="100" type="date" name="date" class="form-control" placeholder="*" required>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Hora inicio: </label>
					                    </div>
					                    <div class="col-md-3">
					                        <input maxlength="100" type="time" name="h_i" class="form-control" placeholder="*" required>
					                    </div>
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Hora fin: </label>
					                    </div>
					                    <div class="col-md-3">
					                        <input maxlength="100" type="time" name="h_f" class="form-control" placeholder="*" required>
					                    </div>

					                </div>

									<div class="row form-group">
										<div class="col-md-2 text-right">
						                    <label class="col-form-label mr-2 control-label">Details list </label>
						                </div>
					                	<div class="col-md-4">
						                        <textarea maxlength="100" type="text" class="form-control" placeholder="*" id="det" required></textarea>
						                        <button class="btn btn-info btnEx">ADD DETAIL</button>
					                	</div>
					                	<div class="col-md-6 detailsList">
					                		<h4>Details list</h4>
					                		<ul></ul>
					                		<input type="hidden" id="detallesLista" name="det" />
					                	</div>
					                </div>




					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Description: </label>
					                    </div>
					                    <div class="col-md-10">
					                        <textarea maxlength="100" type="text" name="contenido" class="form-control" placeholder="*" required></textarea>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Motivation for clients: </label>
					                    </div>
					                    <div class="col-md-10">
					                        <textarea maxlength="100" type="text" name="motiv" class="form-control" placeholder="*" required></textarea><br>
					                        <button class="btn btn-success pull-right" id="addE">SAVE</button>
					                    </div>
					                </div>
					                
    							</div>
    						</form>
    					</div>
    				</div>
    				<div class="row ver">
    					<div class="col-md-12">
    						<table class="table table-hover no-margin" id="tab">
			                	<thead>
				                  	<tr>
					                    <th>TITLE</th>
					                    <th>DATE</th>
					                    <th>ACTIONS</th>
				                  	</tr>
				                </thead>
	                			<tbody id="contenido_tabla"></tbody>
          					</table>
    					</div>
    				</div>
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
<script src="<?= base_url('assets/sources/js/Admin/events.js'); ?>"></script>


