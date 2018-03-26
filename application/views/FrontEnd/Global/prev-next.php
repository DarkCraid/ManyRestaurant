<style>
	.options{
	border-top: 1px solid #e3e3e3;
	border-bottom: 1px solid #e3e3e3;
	margin-bottom: 20px;
	padding: 0px;
}
.options>img{
	height: 35px;
	margin: 5.5px;
}
.op-pager{
	border-right: 1px solid #e3e3e3;
}

.pager{
	margin-top: 8px;
	margin-bottom: 8px;
}
.prev-next{
	border: none;
	border-radius: 200px !important;
	padding: 8px 20px;
	text-transform: uppercase;
	font-size: 10px;
	background-color: #ffeac5;
	margin-right: 5px; 
	color: #fea100;
}
.prev-next>span{
	font-weight: bold;
}
.prev-next:hover{
	background: #fea100;
	color: white;
}
.pager>img{
	margin-top: 6px;
	margin-right: 15px;
}
</style>

<div class="options op-pager col-xs-8">
	<div class="pager">
		<button type="button" class="prev-next pull-left" id="<?= $idFind['idnext']; ?>"><span>< Next</span></button>
		<button type="button" class="prev-next pull-left" id="<?= $idFind['idprev']; ?>"><span>Prev ></span></button>
		<img class="pull-right" src="<?= base_url('assets/sources/img/like.png'); ?>" alt="likes" >
	</div>
</div>
<div class="options col-xs-4">
	<img class="pull-right" src="<?= base_url('assets/sources/img/redes.png'); ?>" alt="Redes" >
</div>