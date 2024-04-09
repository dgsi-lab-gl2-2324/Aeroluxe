<?php

/**
 * Class ControladorController
 */
class ControladorController extends ControladorBase
{

    /**
     * ControladorController constructor.
     */
    public function __construct()
    {
        parent::__construct();
       
    }
   
    public function index()
    {
        $data = array();



        $this->view("index", $data);
    }

}

?>