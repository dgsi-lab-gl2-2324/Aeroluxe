<?php


class Entrada
{

    /**
     * @var id
     */
    private $id;
        /**
     * @var id_cliente
     */
    private $id_cliente;
    /**
     * @var tipo_entrada
     */
    private $tipo_entrada;
    /**
     * @var nombre
     */
    private $nombre;
    /**
     * @var email
     */
    private $email;
    /**
     * @var telefono
     */
    private $telefono;


    /**
     * Clientes constructor.
     * @param $id
     * @param $id_cliente
     * @param $tipo_entrada
     * @param $nombre
     * @param $email
     * @param $telefono
     */
    public function __construct($id, $id_cliente, $tipo_entrada, $nombre, $email, $telefono)
    {
        $this->id = $id;
        $this->id_cliente = $id_cliente;
        $this->tipo_entrada = $tipo_entrada;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
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
     * @return id_cliente
     */
    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param id_cliente
     */
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    /**
     * @return tipo_entrada
     */
    public function getTipo_entrada()
    {
        return $this->tipo_entrada;
    }

    /**
     * @param tipo_entrada
     */
    public function setTipo_entrada($tipo_entrada)
    {
        $this->tipo_entrada = $tipo_entrada;
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
     * @return telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}
