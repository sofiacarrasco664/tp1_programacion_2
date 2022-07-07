 <?php 

require_once __DIR__ . '/../bibliotecas/productos.php';
$productos = productosTodo();

?>
<section id="catalogo">
  <h2>Catalogo</h2>
  <img src="img/perro_intervenido_con_orejas_de_oso.jpg" alt="Perro grande, intervenido con orejas de oso y dibujos">
</section>

<section id="listado-productos">
  <h3>Nuestros productos</h3>
  <ul>
      <?php
      foreach($productos as $producto) :
      ?>

      <li class="card">
        <img src="<?= 'img/' . $producto->getImg();?>" alt="<?=$producto->getImg_descripcion();?>">
        <h4><?=$producto->getNombre();?></h4>
        <a href="index.php?s=detalle_productos&id=<?=$producto->getProducto_id();?>">Ver más</a>
      </li>

      <?php
      endforeach;
      ?>
  </ul>

</section>