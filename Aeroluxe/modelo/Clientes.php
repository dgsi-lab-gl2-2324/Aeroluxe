<?php


class Clientes
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
     * @var apellido1
     */
    private $apellido1;
    /**     
     * @var apellido2
     */
    private $apellido2;
    /**
     * @var dni
     */
    private $dni;
    /**
     * @var email
     */
    private $email;
    /**
     * @var telef
     */
    private $telef;
    /**
     * @var clave
     */
    private string $clave;
    /**
     * @var fecha_alta
     */
    private $fechaalta;
    /**
     * @var direccion
     */
    private $direccion;

    /**
     * Clientes constructor.
     * @param $id
     * @param $nombre
     * @param $apellido1
     * @param $apellido2
     * @param $dni
     * @param $email
     * @param $telef
     * @param $clave
     * @param $fechaalta
     * @param $direccion
     */
    public function __construct($id, $nombre, $apellido1, $apellido2, $dni, $email, $telef, string $clave, $fechaalta, $direccion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->dni = $dni;
        $this->email = $email;
        $this->telef = $telef;
        $this->clave = $clave;
        $this->fechaalta = $fechaalta;
        $this->direccion = $direccion;
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
     * @return apellido1
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * @param apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * @return apellido2
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * @param apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
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
     * @return email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return telef
     */
    public function getTelef()
    {
        return $this->telef;
    }

    /**
     * @param telef
     */
    public function setTelef($telef)
    {
        $this->telef = $telef;
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

    /**
     * @return fecha_alta
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * @param fecha_alta
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;
    }

    /**
     * @return direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
}
