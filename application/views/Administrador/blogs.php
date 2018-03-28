<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<link rel="stylesheet" href="<?= base_url('assets/sources/css/Admin/blogs.css'); ?>">


  <div class="content-wrapper">
    <section class="content-header">
      	<section class="content">
	        <div class="row box">
    			<div class="container">
    				<div class="col-md-2"><h3>Blogs</h3></div>
    				<div class="col-md-10 text-right">
    					<button class=" btn btn-success btnPrin">Add new post</button>
    					<button class=" btn btn-success btnPrin">Show post's list</button><br><br>
    				</div>
    			</div>
	        </div>
			
	        <div class="row box">
	        	<div class="container" id="contentenido">
    				<div class="row add" style="display: none;">
    					<div class="col-md-12">
    						<form enctype="multipart/form-data" role="form" method="post" action="<?= base_url('index.php/Admin/Blogs/addBlog'); ?>"  id="addBlogForm">
    							<div class="col-md-4">
    								<img class="imagen" alt="img" id="imagenBlog" src="<?= base_url('assets/sources/img/Sin_imagen.png') ?>">
    								<input type="file" name="fotoP" class="btn btn-success col-xs-12" onchange="readURL(this);" />
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
					                        <label class="col-form-label mr-2 control-label">Category: </label>
					                    </div>
					                    <div class="col-md-3">
					                        <select id="category" name="category" class="form-control">
					                        	<?php foreach ($categorias as $cat) { ?>
													<option value="<?= $cat->id; ?>"><?= $cat->titulo; ?></option>
					                        	<?php } ?>
					                        </select>
					                    </div>
					                    <div class="col-md-3">
					                        <button class="btn btn-info" id="addC">ADD CATEGORY</button>
					                    </div>

					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Description: </label>
					                    </div>
					                    <div class="col-md-10">
					                        <textarea maxlength="100" type="text" name="contenido" class="form-control" placeholder="*" required></textarea><br>
					                        <button class="btn btn-success pull-right" id="addB">ADD</button>
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
<script src="<?= base_url('assets/sources/js/Admin/blogs.js'); ?>"></script>


