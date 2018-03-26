<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/contactus.css'); ?>">

<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Contact Us</h1>
</div>

<div class="container">
	<div class="row" style="margin-top: 50px; margin-bottom: 30px">
		<div class="container">
			<div class="col-sm-4">
					<div class="col-sm-8">
					<h3>Contact Details</h3>
					<span class="glyphicon glyphicon-map-marker"></span>
					<h6><b>ADDRESS</b></h6>
					<h6 style="color: gray;">Luxury Restaurant</h6>
					<h6 style="color: gray;">California Second Street</h6>
					<h6 style="color: gray;">2nd floor</h6>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="col-sm-8">
					<span class="glyphicon glyphicon-earphone" style="margin-top: 55px"></span>
					<h6><b>PHONE</b></h6>
					<h6 style="color: gray;">+91 855 558 659</h6>
					<h6 style="color: gray;"><b>EMAIL: </b>info@luxury.com</h6>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="col-sm-8">
					<img src="<?= base_url('assets/sources/img/icon_share.png'); ?>" style="margin-top: 55px">
					<h6><b>FOLLOW US</b></h6>
					<div class="social-networks">
                      <a href="#" class="twitter"> <img src="<?= base_url('assets/sources/img/icon_twitter.png'); ?>"></a>
                      <a href="#" class="facebook"><img src="<?= base_url('assets/sources/img/icon_facebook.png'); ?>"></a>
                      <a href="#" class="google"><img src="<?= base_url('assets/sources/img/icon_google.png'); ?>"></a>
                    </div> 
				</div>
			</div>
		</div>
	</div>
</div>

<form id="formularioContacto" action="<?php echo base_url('index.php/Restaurant/ContactoControl/guardar'); ?>" method="POST">
	<div style="background-color: #e2f7e0;">
		<div class="container"  id="row2">
			<div class="col-sm-4">
				<div class="col-sm-8">
					<h3>Get in touch</h3>
					<div class="form-group">
						<div class="input-group input-group-sm">
		                    <span class="input-group-addon form" id="sizing-addon3"><img src="<?= base_url('assets/sources/img/icon_user.png'); ?>" width="15px;"></span>
		                    <input type="text" id="input1" placeholder="Name*" aria-describedby="sizing-addon3" name="Nombre">
		                 </div>
		            </div>
		            <div class="form-group">
		                 <div class="input-group input-group-sm">
		                    <span class="input-group-addon form" id="sizing-addon3"><img src="<?= base_url('assets/sources/img/icon_msg.png'); ?>" width="15px;"></span>
		                    <input type="text" id="input2" placeholder="Message*" aria-describedby="sizing-addon3" name="Mensaje">
		                 </div>
	            	 </div>

	            </div>
			</div>
			<div class="col-sm-4">
				<div class="col-sm-8">
					<div class="form-group" style="margin-top: 58px;">
						<div class="input-group input-group-sm">
			                    <span class="input-group-addon form" id="sizing-addon3"><img src="<?= base_url('assets/sources/img/icon_carta.png'); ?>" width="15px;"></span>
			                    <input type="email" id="input3" placeholder="Email*" aria-describedby="sizing-addon3" name="Email">
			            </div>
			        </div>
			    </div>
			</div>
		<div class="form-group">
		<button class="btn btn-warning" id="botonSend" type="submit">SEND NOW</button>
		</div>
	</div>
</div>	            	 
	
</form>

<?php $this->load->view('FrontEnd/Global/Footer'); ?>