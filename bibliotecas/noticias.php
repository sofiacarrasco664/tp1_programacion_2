<?php

/**
 * Obtiene todas las noticias.
 *
 * @return ListadoNoticias[]  La lista de noticias.
 */

function noticiasTodo () : array {
    $filename = __DIR__ . '/../data/noticias.json';
    $jsonContent = file_get_contents($filename);
    $data = json_decode($jsonContent, true);

    $noticias = [];

        foreach($data as $dato) {
                $noticia = new ListadoNoticias();
                $noticia->setNoticia_id($dato['noticia_id']);
                $noticia->setTitulo($dato['titulo']);
                $noticia->setTexto($dato['texto']);
                $noticia->setFecha($dato['fecha']);
                $noticia->setSinopsis($dato['sinopsis']);
                $noticia->setImg_chica_noticias($dato['img_chica_noticias']);
                $noticia->setImg_noticias($dato['img_noticias']);
                $noticia->setImg_descripcion_noticias($dato['img_descripcion_noticias']);

                $noticias[] = $noticia;
        }


    return $noticias;

}

function noticiasTraerPorId(int $id): ?ListadoNoticias {
        $noticias = noticiasTodo();

        foreach($noticias as $noticia) {
                if($noticia->getNoticia_id() === $id) {
                        return $noticia;
                }
        }

        return null;
}
