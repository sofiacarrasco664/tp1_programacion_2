<?php 

require_once __DIR__ . '/../bibliotecas/productos.php';
$producto = productosTraerPorId($_GET['id']);

?>

<section id="detalle-producto">
    <picture>
        <img src="<?= 'img/' . $producto->getImg();?>" alt="<?= $producto->getImg_descripcion();?>">
    </picture>
    <div>
        <h2><?= $producto->getNombre();?></h2>
        <p><?= $producto->getDescripcion();?></p>
    </div>
</section>