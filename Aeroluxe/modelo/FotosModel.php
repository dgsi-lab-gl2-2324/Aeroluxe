<?php

class FotosModel extends EntidadBase
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
        $this->table = "fotos";
        parent::__construct($this->table);
    }


    public function insertarFoto($tipo, $imagen)
    {
        $inserto = false;

        $sql = "INSERT INTO $this->table "
            . " (tipo,imagen)"
            . " VALUES(:tipo, :imagen)";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':tipo', $tipo, PDO::PARAM_INT);
        $statement->bindParam(':imagen', $imagen, PDO::PARAM_LOB);


        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            $inserto = false;
        }
        return $inserto;
    }

    public function dameTodasFotos()
    {
        $fotos = array();

        $sql = "SELECT * FROM $this->table;";
        $statement = $this->db->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() >= 1) {

            $table = $statement->fetchAll();

            foreach ($table as $row) {

                array_push($fotos, new Fotos(
                    $row['id'],
                    $row['tipo'],
                    $row['imagen']
                ));
            }
        }
        return $fotos;
    }

    public function editarTipo($idTipo, $idFoto)
    {
        $inserto = false;
        $sql = "UPDATE $this->table SET tipo = :idTipo WHERE id = :idFoto";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':idTipo', $idTipo, PDO::PARAM_INT);
        $statement->bindParam(':idFoto', $idFoto, PDO::PARAM_INT);

        try {
            $save = $statement->execute();
            if ($save) {
                $inserto = true;
            } else {
                print_r($statement->errorInfo());
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            $inserto = false;
        }
        return $inserto;
    }


    public function borrarFoto($id)
    {
        $borrado = false;

        $sql = "DELETE FROM $this->table WHERE id = :id";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $borrado = $statement->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            $borrado = false;
        }
        return $borrado;
    }
}
