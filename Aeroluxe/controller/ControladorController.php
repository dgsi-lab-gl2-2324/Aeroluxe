<?php

/**
 * Class ControladorController
 */
class ControladorController extends ControladorBase
{

    public $clientes;


    /**
     * ControladorController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->clientes = new ClientesModel();

    }
   
    public function index()
    {
        $data = array();


        $cli = $this->clientes->dameCliente(un_id);
        $data['client'] = $cli;

        $this->view("index", $data);
    }

}

?>