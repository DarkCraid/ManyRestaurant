<style>
	.openingHours{margin-top: 30px;margin-bottom: 50px;}
	.openingHours>div>label{color: #fea100; font-size: 20px;}
	.openingHours small{display: inline-block; color: gray;}
</style>

<div class="container openingHours">
	<h3 class="col-lg-4 text-right">Opening Hourss</h3>
	<div class="col-lg-5">
		<?php 
			$lv = date('h:i a', strtotime($time[0]->hi_lv)).' - '.date('h:i a', strtotime($time[0]->hf_lv));
			$sd = date('h:i a', strtotime($time[0]->hi_sd)).' - '.date('h:i a', strtotime($time[0]->hf_sd));
		?>
		<label class="col-xs-6"><small>Monday to Friday</small><br/><?= $lv; ?></label>
		<label class="col-xs-6"><small>Saturday to Sunday</small><br/><?= $sd; ?></label>
	</div>
</div>