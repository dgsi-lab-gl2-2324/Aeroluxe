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
     * @var AdminModel
     */
    public $admin;

    /**
     * SesionController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->cliente = new ClientesModel();
        $this->admin = new AdminModel();
    }

    public function registro()
    {
        $data = array();


        $cargarVista = "index";
        if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
        } else {
            $cargarVista = "registro";
        }

        $mensaje = "";
        $data['mensaje'] = $mensaje;

        $this->view($cargarVista, $data);
    }


    public function registrarse()
    {
        $data = array();


        $cargarvista = "index";

        if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
        } else {
            if (
                isset($_POST['nombre']) && isset($_POST['ape1']) && isset($_POST['ape2']) &&
                isset($_POST['dni']) && isset($_POST['contrasena']) &&
                isset($_POST['contrasenaRep']) && isset($_POST['email']) &&
                isset($_POST['telef']) && isset($_POST['direccion'])
            ) {

                $nombre = $_POST['nombre'];
                $ape1 = $_POST['ape1'];
                $ape2 = $_POST['ape2'];
                $dni = $_POST['dni'];
                $clave = $_POST['contrasena'];
                $clave2 = $_POST['contrasenaRep'];
                $email = $_POST['email'];
                $tlf = $_POST['telef'];
                $direccion = $_POST['direccion'];

                if ($clave == $clave2) {
                    $clave = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

                    $inserto = $this->cliente->insertarUsuario($nombre, $ape1, $ape2, $dni, $email, $tlf, $clave, $direccion);

                    if ($inserto) {

                        $datosCli = $this->cliente->dameClientePorDni($dni);
                        $data['datosCli'] = $datosCli;

                        $_SESSION["USER_NOMBRE"] = $nombre;
                        $_SESSION["USER_COD"] = $datosCli->getId();
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
        }


        $this->view($cargarvista, $data);
    }

    public function registrarAdmin()
    {
        $data = array();


        $cargarvista = "index";

        if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
        } else {
            if (
                isset($_POST['nombre']) &&
                isset($_POST['dni']) &&
                isset($_POST['contrasena']) &&
                isset($_POST['contrasenaRep'])
            ) {

                $nombre = $_POST['nombre'];
                $dni = $_POST['dni'];
                $clave = $_POST['contrasena'];
                $clave2 = $_POST['contrasenaRep'];

                if ($clave == $clave2) {
                    $clave = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

                    $inserto = $this->admin->insertarAdmin($nombre, $dni, $clave);

                    if ($inserto) {

                        $datosAd = $this->admin->dameAdminPorDni($dni);
                        $data['datosAd'] = $datosAd;

                        $_SESSION["USER_NOMBRE"] = $nombre;
                        $_SESSION["USER_COD"] = $datosAd->getId();
                        $_SESSION["IS_ADMIN"] = true;

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
        }
        $this->view($cargarvista, $data);
    }

    public function iniciar()
    {
        $data = array();
        $cargarVista = "index";

        if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
        } else {
            $mensaje = "";
            $data['mensaje'] = $mensaje;

            $cargarVista = "iniciarSesion";
        }


        $this->view($cargarVista, $data);
    }

    public function iniciaSesion()
    {
        $data = array();
        $cargarvista = 'index';


        if (isset($_POST['dni']) && isset($_POST['contrasena'])) {
            $dni = $_POST['dni'];
            $contrasena = $_POST['contrasena'];

            $admin = $this->admin->dameAdminPorDni($dni);
            if ($admin) {
                if (password_verify($contrasena, $admin->getClave())) {

                    $_SESSION["USER_NOMBRE"] = $admin->getNombre();
                    $_SESSION["USER_DNI"] = $admin->getDni();
                    $_SESSION["USER_COD"] = $admin->getId();

                    $_SESSION["IS_ADMIN"] = true;

                    $cargarvista = 'index';
                } else {
                    $mens = "Datos incorrectos.";
                    $mensaje = '<div class="alert alert-warning text-center" role="alert">' . $mens . '</div>';
                    $data['mensaje'] = $mensaje;
                }
            } else {
                $usuario = $this->cliente->dameClientePorDni($dni);
                $cargarvista = 'iniciarSesion';

                if ($usuario) {

                    if (password_verify($contrasena, $usuario->getClave())) {

                        $_SESSION["USER_NOMBRE"] = $usuario->getNombre();
                        $_SESSION["USER_DNI"] = $usuario->getDni();
                        $_SESSION["USER_COD"] = $usuario->getId();

                        $cargarvista = 'index';
                    } else {
                        $mens = "Datos incorrectos.";
                        $mensaje = '<div class="alert alert-warning text-center" role="alert">' . $mens . '</div>';
                        $data['mensaje'] = $mensaje;
                    }
                } else {
                    $mens = "Datos incorrectos.";
                    $mensaje = '<div  class="alert alert-warning text-center" role="alert">' . $mens . '</div>';
                    $data['mensaje'] = $mensaje;
                }
            }
        } else {

            $mens = "Datos incorrectos.";
            $mensaje = '<div class="alert alert-warning text-center" role="alert">' . $mens . '</div>';
            $data['mensaje'] = $mensaje;
        }

        $this->view($cargarvista, $data);
    }
    public function cerrarSesion()
    {
        $_SESSION["USER_NOMBRE"] = '';
        $_SESSION['USER_COD'] = '';

        $data = array();



        $this->view("index", $data);
    }

    public function perfil()
    {
        $data = array();

        if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
            $data['username'] = $_SESSION["USER_NOMBRE"];
            $usuario = $this->cliente->dameClientePorDni($_SESSION["USER_DNI"]);
            $data['usuario'] = $usuario;
        }

        $this->view("perfiluser", $data);
    }

    public function actualizarperfil()
    {
        $data = array();

        if (isset($_SESSION["USER_NOMBRE"]) && !empty($_SESSION["USER_NOMBRE"])) {
            if (
                isset($_POST['nombre']) && isset($_POST['apellido1']) &&
                isset($_POST['apellido2']) && isset($_POST['email']) &&
                isset($_POST['telefono']) && isset($_POST['direccion'])
            ) {

                $nombre = $_POST['nombre'];
                $ape1 = $_POST['apellido1'];
                $ape2 = $_POST['apellido2'];
                $email = $_POST['email'];
                $tlf = $_POST['telefono'];
                $direccion = $_POST['direccion'];

                $inserto = $this->cliente->updateUsuario($_SESSION["USER_DNI"], $nombre, $ape1, $ape2, $email, $tlf, $direccion);

                if ($inserto) {
                    $data['mensaje'] = "Perfil actualizado correctamente.";
                } else {
                    $data['mensaje'] = "Error al actualizar el perfil.";
                }
            }

            $this->view("perfiluser", $data);
        }
    }

    public function compra()
    {
        $data = array();

        $this->view("seleccionentradas", $data);
    }

    public function compra()
    {
        $data = array();

        $this->view("seleccionentradas", $data);
    }
}
