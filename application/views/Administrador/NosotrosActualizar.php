<?php $this->load->view('Administrador/Global/Header');?>
<?php $this->load->view('Administrador/Global/AsideLeft');?>

<div class="content-wrapper">
    <section class="content-header">
      	<section class="content">
	        <div class="row box">
    			<div class="container">
    				<div class="col-md-2"><h3>About Us</h3></div>
    				<button class="btn btn-success pull-right" id="save" style="position: relative; bottom: -10px;">SAVE</button>
    			</div>
	        </div>
			
	        <div class="row box">
	        	<div class="container" id="contentenido">
    				<div class="row">
    					<div class="col-md-12">
    						<form enctype="multipart/form-data" role="form" method="post" action="<?= base_url('index.php/Admin/NosotrosActualizar/do_upload'); ?>"  id="saaveForm">
    								<br>
    								<div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Address: </label>
					                    </div>
					                    <div class="col-md-10">
					                        <input maxlength="100" type="text" name="adrres" class="form-control" placeholder="*" value="<?= $key->address; ?>" required>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Email: </label>
					                    </div>
					                    <div class="col-md-4">
					                        <input maxlength="100" type="email" name="email" class="form-control" placeholder="*" value="<?= $key->email; ?>" required>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Phone: </label>
					                    </div>
					                    <div class="col-md-2">
					                        <input maxlength="10" type="text" name="phone" class="form-control" placeholder="*" value="<?= $key->telefono; ?>" required>
					                    </div>
					                </div>
					                <div class="row form-group" style="background-color: #e8e8e8;">
					                	<h4>Monday to Friday</h4>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">From: </label>
					                    </div>
					                    <div class="col-md-2">
					                        <input maxlength="10" type="time" name="hi_lv" class="form-control" placeholder="*" value="<?= $key->hi_lv; ?>" required>
					                    </div>
					                    <div class="col-md-1 text-center">
					                        <label class="col-form-label mr-2 control-label">To: </label>
					                    </div>
					                    <div class="col-md-2">
					                        <input maxlength="10" type="time" name="hf_lv" class="form-control" placeholder="*" value="<?= $key->hf_lv; ?>" required>
					                    </div>
					                </div>
					                <div class="row form-group" style="background-color: #e8e8e8;">
					                	<h4>Saturday to Sunday</h4>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">From: </label>
					                    </div>
					                    <div class="col-md-2">
					                        <input maxlength="10" type="time" name="hi_sd" class="form-control" placeholder="*" value="<?= $key->hi_sd; ?>" required>
					                    </div>
					                    <div class="col-md-1 text-center">
					                        <label class="col-form-label mr-2 control-label">To: </label>
					                    </div>
					                    <div class="col-md-2">
					                        <input maxlength="10" type="time" name="hf_sd" class="form-control" placeholder="*" value="<?= $key->hf_sd; ?>" required>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <div class="col-md-2 text-right">
					                        <label class="col-form-label mr-2 control-label">Our History: </label>
					                    </div>
					                    <div class="col-md-10">
					                        <textarea maxlength="100" type="text" name="history" class="form-control" placeholder="*" required style="height: 120px;"><?= $key->historia; ?></textarea><br>
					                    </div>
					                </div>
					                <div class="row form-group">
					                    <h3 class="text-center">Photo</h3>
					                    <div class="col-md-offset-2 col-md-2">
					                    	<label>Choese other photo</label>
					                    </div>
					                    <div class="col-md-3">
					                    	<select name="photo" id="photo" class="form-control">
					                    		<?php foreach ($fotos as $f) { ?>
					                    		<?php if($f->tipo==1){ ?>
					                    			<option value="<?= $f->id; ?>" selected><?= $f->foto; ?></option>
					                    		<?php }else{ ?>
					                    			<option value="<?= $f->id; ?>"><?= $f->foto; ?></option>
					                    		<?php } } ?>
					                    	</select>
					                    </div>
					                </div>
					                <div class="col-md-8 col-md-offset-2">
				                        <img src="<?= base_url('assets/sources/img/restaurant/'.$historia[0]->foto);?>" alt="fotoHistoria" style="width: 100%;" id="fotoImg">
				                    </div>
    						</form>
    					</div>

    				</div>
    			</div>
			</div>
		</section>
    </section>
  </div>

<?php $this->load->view('Administrador/Global/AsideRight');?>
<?php $this->load->view('Administrador/Global/Footer');?>
<script src="<?= base_url('assets/sources/js/Admin/AboutUs.js'); ?>"></script>