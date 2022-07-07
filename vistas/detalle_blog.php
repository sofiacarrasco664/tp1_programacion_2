<?php 

require_once __DIR__ . '/../bibliotecas/noticias.php';

$noticia = noticiasTraerPorId($_GET['id']);

?>

<section id="detalle-noticia">
    <article>
        <div>
            <h2><?= $noticia->getTitulo();?></h2>
            <p><?= $noticia->getTexto();?></p>
        </div>
        <picture>
            <img src="<?= 'img/' . $noticia->getImg_noticias();?>" alt="<?= $noticia->getImg_descripcion_noticias();?>">
        </picture>
    </article>
</section>