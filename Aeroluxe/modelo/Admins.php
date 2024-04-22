<?php

class Admins
{
    /**
     * @var id
     */
    private $id;
    /**
     * @var nombre
     */
    private $nombre;
    /**
     * @var dni
     */
    private $dni;
    /**
     * @var clave
     */
    private string $clave;

    /**
     * Admins constructor.
     * @param $id
     * @param $nombre
     * @param $dni
     * @param $clave
     */
    public function __construct($id, $nombre, $dni, string $clave)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->clave = $clave;
    }

    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return dni
     */

    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param clave
     */
    public function setClave(string $clave)
    {
        $this->clave = $clave;
    }
}
