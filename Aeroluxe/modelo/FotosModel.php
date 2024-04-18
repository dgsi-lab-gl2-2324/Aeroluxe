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

        $statement->bindParam(':tipo', $nombre, PDO::PARAM_INT);
        $statement->bindParam(':imagen', $ape1, PDO::PARAM_LOB);

        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            $inserto = false;
        }
        return $inserto;
    }

}