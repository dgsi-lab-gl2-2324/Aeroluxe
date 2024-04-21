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

        if ($statement->rowCount() > 0) {
            $rows = $statement->fetchAll();

            foreach ($rows as $row) {
                array_push($tipos, new Tipos(
                    $row['id'],
                    $row['tipo']
                ));
            }
        }
        return $tipos;
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

    public function borrarTipo($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $save = $statement->execute();
            $borrado = true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            $borrado = false;
        }
        return $borrado;
    }
}
