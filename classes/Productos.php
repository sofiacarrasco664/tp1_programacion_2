<?php

class ListadoProductos 
{
    protected $producto_id;
    protected $nombre;
    protected $descripcion;
    protected $img;
    protected $img_grande;
    protected $img_descripcion;

    /**
     * Get the value of producto_id
     */ 
    public function getProducto_id()
    {
        return $this->producto_id;
    }

    /**
     * Set the value of producto_id
     *
     * @return  self
     */ 
    public function setProducto_id($producto_id)
    {
        $this->producto_id = $producto_id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

        /**
     * Get the value of img_grande
     */ 
    public function getImg_grande()
    {
        return $this->img_grande;
    }

    /**
     * Set the value of img_grande
     *
     * @return  self
     */ 
    public function setImg_grande($img_grande)
    {
        $this->img_grande = $img_grande;

        return $this;
    }

    /**
     * Get the value of img_descripcion
     */ 
    public function getImg_descripcion()
    {
        return $this->img_descripcion;
    }

    /**
     * Set the value of img_descripcion
     *
     * @return  self
     */ 
    public function setImg_descripcion($img_descripcion)
    {
        $this->img_descripcion = $img_descripcion;

        return $this;
    }

}


    