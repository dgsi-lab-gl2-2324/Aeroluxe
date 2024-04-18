<?php

/**
 * Class SesionController
 */
class SesionController extends ControladorBase
{
    /**
     * @var ClientesModel
     */
    public $cliente;


    /**
     * SesionController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->cliente = new ClientesModel();
    }




    public function registro()
    {
        $data = array();

        $mensaje = "";
        $data['mensaje'] = $mensaje;

        $this->view("registro", $data);
    }


    public function registrarse()
    {
        $data = array();

        $cargarvista = "index";


        if (
            isset($_POST['nombre']) && isset($_POST['ape1']) && isset($_POST['ape2']) && 
            isset($_POST['dni']) && isset($_POST['contrasena']) &&
            isset($_POST['contrasenaRep']) && isset($_POST['email']) &&
            isset($_POST['telef'])
        ) {

            $nombre = $_POST['nombre'];
            $ape1 = $_POST['ape1'];
            $ape2 = $_POST['ape2'];
            $dni = $_POST['dni'];
            $clave = $_POST['contrasena'];
            $clave2 = $_POST['contrasenaRep'];
            $email = $_POST['email'];
            $tlf = $_POST['telef'];

            if ($clave == $clave2) {
                $clave = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

                $inserto = $this->cliente->insertarUsuario($nombre, $ape1, $ape2, $dni, $email, $tlf, $clave);

                if ($inserto) {
                    $cargarvista = 'index';
                } else {
                    $mens = "Usuario ya existente";
                    $mensaje = '<div class="alert alert-warning text-center" role="alert">' . $mens . '</div>';
                    $data['mensaje'] = $mensaje;
                    $cargarvista = 'registro';
                }
            } else {
                $mens = "Claves no coinciden";
                $mensaje = '<div class="alert alert-warning text-center" role="alert">' . $mens . '</div>';
                $data['mensaje'] = $mensaje;
                $cargarvista = 'registro';
            }
        }


        $this->view($cargarvista, $data);
    }
}
