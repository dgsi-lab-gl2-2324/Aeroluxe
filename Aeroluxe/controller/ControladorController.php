<?php

/**
 * Class ControladorController
 */
class ControladorController extends ControladorBase
{
    /**
     * @var FotosModel
     * @var TiposModel
     * @var ClientesModel
     */
    public $fotos;
    public $tipos;
    public $clientes;


    /**
     * ControladorController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->fotos = new FotosModel();
        $this->tipos = new TiposModel();
        $this->clientes = new ClientesModel();

    }
   
    public function index()
    {
        $data = array();

        $data['datosCli'] = "";


        $this->view("index", $data);
    }

    public function admin()
    {
        $data = array();

        $opcion = "";
        $data['opcion'] = $opcion;


        $this->view("admin", $data);
    }

    public function registroadmin()
    {
        $data = array();

        $opcion = "admin";
        $data['opcion'] = $opcion;

        $this->view("admin", $data);

    }

    public function mostrarClientes()
    {
        $data = array();

        $opcion = "clientes";
        $data['opcion'] = $opcion;
        
        $clientes = $this->clientes->dameTodosClientes();
        $data['clientes'] = $clientes;

        $this->view("admin", $data);
    }



}

?>