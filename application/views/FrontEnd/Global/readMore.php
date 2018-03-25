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
.pager>button{
	border: none;
	border-radius: 5px !important;
	padding: 5px 20px;
	background-color: #ffeac5;
	margin-right: 5px; 
	color: #fea100;
}
.pager>button>span{
	font-weight: bold;
}
.pager>button:hover{
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
		<button type="button" class="pull-left"><span>READ MORE</span></button>
		<img class="pull-right" src="<?= base_url('assets/sources/img/like.png'); ?>" alt="likes" >
	</div>
</div>
<div class="options col-xs-4">
	<img class="pull-right" src="<?= base_url('assets/sources/img/redes.png'); ?>" alt="Redes" >
</div>