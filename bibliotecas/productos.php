<?php

/**
 * Obtiene todas los productos disponibles.
 *
 * @return ListadoProductos[]  La lista de productos.
 */

function productosTodo () : array {
    $filename = __DIR__ . '/../data/productos.json';
    $jsonContent = file_get_contents($filename);
    $data = json_decode($jsonContent, true);

    $productos = [];

        foreach($data as $dato) {
                $producto = new ListadoProductos();
                $producto->setProducto_id($dato['producto_id']);
                $producto->setNombre($dato['nombre']);
                $producto->setDescripcion($dato['descripcion']);
                $producto->setImg($dato['img']);
                $producto->setImg_grande($dato['img_grande']);
                $producto->setImg_descripcion($dato['img_descripcion']);

                $productos[] = $producto;
        }


    return $productos;

}

function productosTraerPorId(int $id): ?ListadoProductos {
        $productos = productosTodo();

        foreach($productos as $producto) {
                if($producto->getProducto_id() === $id) {
                        return $producto;
                }
        }

        return null;
}
