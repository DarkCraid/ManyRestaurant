<style>
	.lista{
	margin-bottom: 26px;
}

.lista>img{
	float: left;
	margin-left: 15px;
	margin-right: 26px;
	width: 70px;
	height: 70px;
}

.lista>p{
	float: left;
}
.lista:hover{
	cursor: pointer;
}
</style>

<h3><strong>Recent Post</strong></h3>
	
<?php foreach ($blogsC as $blog) {	?>				
<div class="row lista readMore" id="<?= $blog->id; ?>">
	<img src="<?= base_url().$blog->foto; ?>">
	<span><?= GetFechaH($blog->fecha); ?></span><br>
	<strong><?= $blog->contenido; ?></strong>
</div>
<?php  } ?>
