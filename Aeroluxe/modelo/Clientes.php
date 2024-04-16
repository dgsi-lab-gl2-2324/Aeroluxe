<?php


class Clientes
{

    /**
     * @var codcliente
     */
    private $codcliente;
    /**
     * @var nombre
     */
    private $nombre;
    /**
     * @var direccion
     */
    private $direccion;
    /**
     * @var email
     */
    private $email;
    /**
     * @var clave
     */
    private $clave;
    /**
     * @var telef
     */
    private $telef;
    /**
     * @var fechaalta
     */
    private $fechaalta;

    /**
     * Clientes constructor.
     * @param $codcliente
     * @param $nombre
     * @param $direccion
     * @param $email
     * @param $clave
     * @param $telef
     * @param $fechaalta
     */
    function __construct($codcliente, $nombre, $direccion, $email, $clave, $telef, $fechaalta)
    {
        $this->codcliente = $codcliente;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->clave = $clave;
        $this->telef = $telef;
        $this->fechaalta = $fechaalta;
    }

    /**
     * @return codcliente
     */
    function getCodcliente()
    {
        return $this->codcliente;
    }

    /**
     * @return nombre
     */
    function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return direccion
     */
    function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @return email
     */
    function getEmail()
    {
        return $this->email;
    }

    /**
     * @return clave
     */
    function getClave()
    {
        return $this->clave;
    }

    /**
     * @return telef
     */
    function getTelef()
    {
        return $this->telef;
    }

    /**
     * @return fechaalta
     */
    function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * @param $codcliente
     */
    function setCodcliente($codcliente)
    {
        $this->codcliente = $codcliente;
    }

    /**
     * @param $nombre
     */
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param $direccion
     */
    function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @param $email
     */
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param $clave
     */
    function setClave($clave)
    {
        $this->clave = $clave;
    }

    /**
     * @param $telef
     */
    function setTelef($telef)
    {
        $this->telef = $telef;
    }

    /**
     * @param $fechaalta
     */
    function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;
    }

}
