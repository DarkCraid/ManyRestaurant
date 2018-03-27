<style>
	.category{    margin-left: 50px;}
	.category>section>h4{margin-top: -2px; font-weight: bold;}
	.lista2 {
    counter-reset: li; 
    list-style: none; 
    *list-style: decimal; 
    font: 15px 'trebuchet MS', 'lucida sans';
    padding-left: 15px;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
    text-transform: uppercase;
}

.lista2 ol {
    margin: 0 0 0 2em; 
}

.lista2 li{
    position: relative;
    display: block;
    padding: .4em .4em .4em 2em;
    *padding: .4em;
    margin: .5em 0;
    color: #444;
    text-decoration: none;
    border-radius: .3em;
    transition: all .3s ease-out;   
}

.lista2 li:hover{
    background: #eee;
    cursor: pointer;
}

.lista2 li:hover:before{
    transform: rotate(360deg);  
}

.lista2 li:before{
    content: counter(li);
    counter-increment: li;
    position: absolute; 
    left: -1.3em;
    top: 50%;
    margin-top: -1.3em;
    background: #ffe9f1;
    height: 2em;
    width: 2em;
    line-height: 2em;
    border: .3em solid #fff;
    text-align: center;
    font-weight: bold;
    border-radius: 2em;
    transition: all .3s ease-out;
}
</style>
<h4>Category</h4>
<ol class="lista2 readMore">
  <?php foreach ($category as $cat) { ?>
  <li><?= $cat->titulo; ?></li>
  <?php } ?>
</ol>