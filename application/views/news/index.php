<h2><?=$title?></h2>

<hr>
<br>
<a href="<?=site_url('news/create')?>">Criar Noticia</a>

<?php foreach($news as $news_itens):?>

    <h3><?=$news_itens['title']?></h3>
    <a href="<?=site_url('news/'.$news_itens['uri'])?>">Ver Noticia</a>

<?php endforeach;?>