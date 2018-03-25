<?php $this->load->view('FrontEnd/Global/Header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/sources/css/chef.css'); ?>">
<div class="blog_bg">
	<h1 class="blog_titulo"><img src="<?= base_url('assets/sources/img/left_leaf.png'); ?>" class="izquierda"><img src="<?= base_url('assets/sources/img/right_leaf.png'); ?>" class="derecha">Chef</h1>
</div>

<div id="form1">
	<div class="container">
		<div class="row">
			<h3><b>Head Chef</b></h3>
			<div class="col-sm-6"><img src="<?= base_url('assets/sources/img/chefhead.jpg'); ?>" width="540px" height="300px"></div>
			<div class="col-sm-5" id="fondoLeft">
				<h3><b>Chef Benito</b></h3>
					<p><font color="gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit</font></p>
					<div class="social-networks">
                      <a href="#" class="twitter"> <img src="<?= base_url('assets/sources/img/icon_twitter.png'); ?>"></a>
                      <a href="#" class="facebook"><img src="<?= base_url('assets/sources/img/icon_facebook.png'); ?>"></a>
                      <a href="#" class="google"><img src="<?= base_url('assets/sources/img/icon_google.png'); ?>"></a>
                	</div>
                	<div class="menu">
                		<h3>Expertise in</h3>
                		<div class="option" id="optionBreakfast">
							<a href=""><img src="../../assets/sources/img/icon_breakfast.png" width="18px" height="18px"> BREAKFAST</a>
						</div>
						<div class="option" id="optionStarter">
							<a href=""><img src="../../assets/sources/img/icon_pizza.png" width="18px" height="18px"> STARTER</a>
						</div>
						<div class="option" id="optionLunch">
							<a href=""><img src="../../assets/sources/img/icon_lunch.png" width="18px" height="18px"> LUNCH</a>
						</div>
                  </div>
			</div>
		</div>
	</div>
</div>

<div class="form2" style="background-color: #eee">
	<div class="container chefOptions">
		<div class="row">
			<div class="form-group">
				<div class="col-md-offset-1 col-md-10">
					<h3><b>Chef Team</b></h3>
					<div class="menu-gallery chef1">
						<img src="<?= base_url('assets/sources/img/chefteam1.jpg'); ?>">
						<div class="menu-desc ">
						<h5><b><center>DOÑA CLARITA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef2">
						<img src="<?= base_url('assets/sources/img/chefteam2.jpg'); ?>">
						<div class="menu-desc ">
						<h5><b><center>BERTHA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef3">
						<img src="<?= base_url('assets/sources/img/chefteam3.jpg'); ?>">
						<div class="menu-desc ">
						<h5><b><center>BERTHA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef4">
						<img src="<?= base_url('assets/sources/img/chefteam4.jpg'); ?>">
						<div class="menu-desc ">
						<h5><b><center>BERTHA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef1">
						<img src="<?= base_url('assets/sources/img/chefteam1.jpg'); ?>" >
						<div class="menu-desc ">
						<h5><b><center>DOÑA CLARITA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef2">
						<img src="<?= base_url('assets/sources/img/chefteam2.jpg'); ?>" >
						<div class="menu-desc ">
						<h5><b><center>BERTHA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef2">
						<img src="<?= base_url('assets/sources/img/chefteam3.jpg'); ?>" >
						<div class="menu-desc ">
						<h5><b><center>BERTHA</center></b></h5>
						</div>
					</div>
					<div class="menu-gallery chef2">
						<img src="<?= base_url('assets/sources/img/chefteam4.jpg'); ?>" >
						<div class="menu-desc ">
						<h5><b><center>BERTHA</center></b></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('FrontEnd/Global/horaApertura'); ?>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>