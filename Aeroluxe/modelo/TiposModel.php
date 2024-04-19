<?php

class TiposModel extends EntidadBase
{

    /**
     * @var string
     */
    private $table;

    /**
     * FotosModel constructor.
     */
    public function __construct()
    {
        $this->table = "tipos_foto";
        parent::__construct($this->table);
    }


    public function dameTipos()
    {
        $tipos = array();

        $sql = "SELECT * FROM $this->table;";
        $statement = $this->db->prepare($sql);

        $statement->execute();

        if ($statement->rowCount() >= 1) {

            $table = $statement->fetch();

            foreach ($table as $row) {

                array_push($tipos, new Tipos(
                    $row['id'],
                    $row['tipo']
                ));
            }
        }
        return $tipos;
    }


    public function dameTodosClientes()
    {
        $clientes = array();

        $sql = "SELECT * FROM $this->table;";
        $statement = $this->db->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() >= 1) {

            $table = $statement->fetchAll();

            foreach ($table as $row) {

                array_push($clientes, new Clientes(
                    $row['id'],
                    $row['nombre'],
                    $row['apellido1'],
                    $row['apellido2'],
                    $row['dni'],
                    $row['email'],
                    $row['telefono'],
                    $row['clave'],
                    $row['fecha_alta']
                ));
            }
        }
        return $clientes;
    }

    public function insertarTipo($tipo)
    {
        $sql = "INSERT INTO $this->table (tipo) VALUES(:tipo)";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':tipo', $tipo, PDO::PARAM_STR);

        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            $inserto = false;
        }
        return $inserto;
    }
}
