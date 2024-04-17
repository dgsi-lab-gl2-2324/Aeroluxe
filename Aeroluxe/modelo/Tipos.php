<?php

class Tipos
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
     * Fotos constructor.
     * @param $id
     * @param $tipo
     */
    public function __construct($id, $tipo)
    {
        $this->id = $id;
        $this->tipo = $tipo;
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

}