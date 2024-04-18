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


    public function dameTipo()
    {
        $tipo = null;

        $sql = "SELECT * FROM $this->table;";
        $statement = $this->db->prepare($sql);

        $statement->execute();

        if ($statement->rowCount() >= 1) {

            $row = $statement->fetch();

            $tipo = new Tipos(
                $row['id'],
                $row['tipo']
            );

        }
        return $tipo;
    }

}