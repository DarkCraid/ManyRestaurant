<?php $this->load->view('FrontEnd/Global/Header'); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/sources/css/pilu.css">
	<div class="header" id="blogDetail">
		<img src="../../assets/sources/img/imgHeaderBlogDetail4.jpg">
		<img src="../../assets/sources/img/niu.png" id="img">
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-1 image" >
				<img src="../../assets/sources/img/imgHeaderBlogDetail5.jpg">
				<div class="col-md-2 cuadro-naranja">
					<div>
						<span>08</span>
						<p>nov-06</p>
					</div>
				</div>
				<div class="col-md-10">
					<h3><strong>Aenca pharetra leetus utsto</strong></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="col-md-3">
				<section class="row">
					<h3><strong>Category</strong></h3>
					<ul class="category">
						<li><span>></span>ALL FOOD</li>
						<li><span>></span>VEGETABLES</li>
						<li><span>></span>DELICIOUS FOOD</li>
						<li><span>></span>SPECIAL DISHES</li>
						<li><span>></span>JUICES</li>	
					</ul>
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
		</div>
	</div>
<?php $this->load->view('FrontEnd/Global/Footer'); ?>