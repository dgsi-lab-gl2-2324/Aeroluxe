<?php

class ControladorBase
{

    public function __construct()
    {

        require_once 'EntidadBase.php';


        foreach (glob("modelo/*.php") as $file) {
            require_once $file;
        }
    }

    public function url($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO)
    {
        $urlString = "index.php?controller=" . $controlador . "&action=" . $accion;
        return $urlString;
    }

    public function view($vista, $datos)
    {
        require_once 'vista/cabecera.php';
        require_once 'vista/' . $vista . 'View.php';
        require_once 'vista/pie.php';
    }


}

?>