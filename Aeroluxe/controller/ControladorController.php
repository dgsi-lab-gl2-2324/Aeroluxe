<?php

/**
 * Class ControladorController
 */
class ControladorController extends ControladorBase
{
    /**
     * @var FotosModel
     * @var TiposModel
     */
    public $fotos;
    public $tipos;


    /**
     * ControladorController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->fotos = new FotosModel();
        $this->tipos = new TiposModel();
       
    }
   
    public function index()
    {
        $data = array();



        $this->view("index", $data);
    }

    public function admin()
    {
        $data = array();

        $mensaje = "";
        $data['mensaje'] = $mensaje;

        $this->view("admin", $data);
    }

}

?>