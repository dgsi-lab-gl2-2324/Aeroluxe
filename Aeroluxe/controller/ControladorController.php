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

    public function verGaleria()
    {
        $data = array();
        $data['mensaje'] = "";

        if (isset($_POST['mensaje'])) {
            $mensaje = $_POST['mensaje'];
            $p = $mensaje == "true" ? "Foto añadida correctamente" : "Error al añadir la foto";
            #$data['mensaje'] = $p;
        }
        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $fotos = $this->fotos->dameTodasFotos();
        $tipos = $this->tipos->dameTipos();

        $data['fotos'] = $fotos;
        $data['tipos'] = $tipos;

        $data['redirige'] = "";


        $this->view("admin", $data);
    }

    public function anadirFoto()
    {

        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;
        $data['mensaje'] = "";

        if (isset($_POST['photoType']) && isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            $tipo = $_POST['photoType'];
            $imagen = file_get_contents($_FILES['img']['tmp_name']);
            $tipos = $this->fotos->insertarFoto($tipo, $imagen);
            $data['mensaje'] = $tipos ? "true" : "false";
        } else {
            $data['mensaje'] = "Error: Datos incompletos o archivo con errores.";
        }

        $fotos = $this->fotos->dameTodasFotos();
        $tipos = $this->tipos->dameTipos();

        $data['fotos'] = $fotos;
        $data['tipos'] = $tipos;
        $data['redirige'] = "true";

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

        $fotos = $this->fotos->dameTodasFotos();
        $tipos = $this->tipos->dameTipos();

        $data['fotos'] = $fotos;
        $data['tipos'] = $tipos;
        $data['redirige'] = "true";

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

    public function borrarFoto()
    {
        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $id = $_POST['id'];

        $data['mensaje'] = "";

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $tipos = $this->fotos->borrarFoto($id);
            $data['mensaje'] = $tipos ? "Foto borrada correctamente" : "Error al borrar la foto";
        } else {
            $data['mensaje'] = "Error: Datos incompletos.";
        }

        $this->view("admin", $data);
    }

    public function borrarTipoFoto()
    {
        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $id = $_POST['id'];

        $data['mensaje'] = "";

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $tipos = $this->tipos->borrarTipo($id);
            $data['mensaje'] = $tipos ? "Tipo borrado correctamente" : "Error al borrar el tipo";
        } else {
            $data['mensaje'] = "Error: Datos incompletos.";
        }

        $this->view("admin", $data);
    }

    public function editarTipoFoto()
    {
        $data = array();

        $opcion = "galeria";
        $data['opcion'] = $opcion;

        $id = $_POST['id'];
        $tipo = $_POST['tipo'];

        $data['mensaje'] = "";

        if (isset($_POST['id']) && isset($_POST['tipo'])) {
            $id = $_POST['id'];
            $tipo = $_POST['tipo'];
            $tipos = $this->fotos->editarTipo($id, $tipo);
            $data['mensaje'] = $tipos ? "Tipo editado correctamente" : "Error al editar el tipo";
        } else {
            $data['mensaje'] = "Error: Datos incompletos.";
        }

        $this->view("admin", $data);
    }
}
