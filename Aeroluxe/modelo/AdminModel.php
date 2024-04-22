<?php

class AdminModel extends EntidadBase
{

    /**
     * @var string
     */
    private $table;

    /**
     * AdminModel constructor.
     */
    public function __construct()
    {
        $this->table = "admin";
        parent::__construct($this->table);
    }

    public function insertarAdmin($nombre, $dni, $clave)
    {
        $inserto = false;

        $sql = "INSERT INTO $this->table "
            . " (nombre,dni,clave)"
            . " VALUES(:nombre, :dni, :clave)";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        $statement->bindParam(':clave', $clave, PDO::PARAM_STR);
        

        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            $inserto = false;
        }
        return $inserto;
    }

    public function dameAdminPorDni($dni)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE dni = :dni;";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            $row = $statement->fetch();

            $usu = new Admins(
                $row['id'],
                $row['nombre'],
                $row['dni'],
                $row['clave']
            );
        }
        return $usu;
    }

    public function dameTodosAdmins()
    {
        $admins = array();

        $sql = "SELECT * FROM $this->table;";
        $statement = $this->db->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() >=1) {

            $table = $statement->fetchAll();

            foreach ($table as $row) {

                array_push($admins, new Admins(
                    $row['id'],
                    $row['nombre'],
                    $row['dni'],
                    $row['clave']
                ));
            }
        }
        return $admins;
    }



}
