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

        $data['mensaje'] = "";


        $this->view("admin", $data);
    }

    public function registroadmin()
    {
        $data = array();

        $opcion = "admin";
        $data['opcion'] = $opcion;
        $data['mensaje'] = "";


        $this->view("admin", $data);
    }

    public function mostrarClientes()
    {
        $data = array();

        $opcion = "clientes";
        $data['opcion'] = $opcion;

        $clientes = $this->clientes->dameTodosClientes();
        $data['clientes'] = $clientes;

        $data['mensaje'] = "";


        $this->view("admin", $data);
    }

    public function editarGaleria()
    {
        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $fotos = $this->fotos->dameTodasFotos();

        $data['galeria'] = $fotos;

        $data['mensaje'] = "";

        $this->view("admin", $data);
    }


    public function anadirFoto()
    {

        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $fotos = $this->fotos->dameTodasFotos();

        $data['galeria'] = $fotos;
        $data['mensaje'] = "";

            if (isset($_POST['photoType']) && isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
                $tipo = $_POST['photoType'];
                $imagen = file_get_contents($_FILES['img']['tmp_name']);
                $tipos = $this->fotos->insertarFoto($tipo, $imagen);
                $data['mensaje'] = $tipos ? "Foto añadida correctamente" : "Error al añadir la foto";
            } else {
                $data['mensaje'] = "Error: Datos incompletos o archivo con errores.";
            }
        
        $this->view("admin", $data);
    }


    public function anadirTipoFoto()
    {
        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $tipo = $_POST['nuevoTipo'];

        $data['mensaje'] = "";

        if (isset($_POST['nuevoTipo'])) {
            $tipo = $_POST['nuevoTipo'];
            $tipos = $this->tipos->insertarTipo($tipo);
            $data['mensaje'] = $tipos ? "Tipo añadido correctamente" : "Error al añadir el tipo";
        } else {
            $data['mensaje'] = "Error: Datos incompletos.";
        }

        $this->view("admin", $data);
    }

    public function mostrarTipoFoto()
    {
        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $tipos = $this->tipos->dameTipos();
        $data['tipos'] = $tipos;

        $data['mensaje'] = "";

        $this->view("admin", $data);
    }
}
