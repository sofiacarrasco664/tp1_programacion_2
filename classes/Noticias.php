<?php

class ListadoNoticias 
{
    protected $noticia_id;
    protected $titulo;
    protected $texto;
    protected $fecha;
    protected $sinopsis;
    protected $img_chica_noticias;
    protected $img_noticias;
    protected $img_descripcion_noticias;


    /**
     * Get the value of noticia_id
     */ 
    public function getNoticia_id()
    {
        return $this->noticia_id;
    }

    /**
     * Set the value of noticia_id
     *
     * @return  self
     */ 
    public function setNoticia_id($noticia_id)
    {
        $this->noticia_id = $noticia_id;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of img_chica_noticias
     */ 
    public function getImg_chica_noticias()
    {
        return $this->img_chica_noticias;
    }

    /**
     * Set the value of img_chica_noticias
     *
     * @return  self
     */ 
    public function setImg_chica_noticias($img_chica_noticias)
    {
        $this->img_chica_noticias = $img_chica_noticias;

        return $this;
    }

    /**
     * Get the value of img_noticias
     */ 
    public function getImg_noticias()
    {
        return $this->img_noticias;
    }

    /**
     * Set the value of img_noticias
     *
     * @return  self
     */ 
    public function setImg_noticias($img_noticias)
    {
        $this->img_noticias = $img_noticias;

        return $this;
    }

    /**
     * Get the value of img_descripcion_noticias
     */ 
    public function getImg_descripcion_noticias()
    {
        return $this->img_descripcion_noticias;
    }

    /**
     * Set the value of img_descripcion_noticias
     *
     * @return  self
     */ 
    public function setImg_descripcion_noticias($img_descripcion_noticias)
    {
        $this->img_descripcion_noticias = $img_descripcion_noticias;

        return $this;
    }

    /**
     * Get the value of sinopsis
     */ 
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     *
     * @return  self
     */ 
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }
}