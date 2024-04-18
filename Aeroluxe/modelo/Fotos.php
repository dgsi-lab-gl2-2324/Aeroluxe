<?php

class Fotos
{
    /**
     * @var id
     */
    private $id;
    /**
     * @var tipo
     */
    private $tipo;
    /**
     * @var imagen
     */
    private $imagen;

    /**
     * Fotos constructor.
     * @param $id
     * @param $tipo
     * @param $imagen
     */
    public function __construct($id, $tipo, $imagen)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->imagen = $imagen;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }

}