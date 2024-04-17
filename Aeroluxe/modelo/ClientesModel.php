<?php

class ClientesModel extends EntidadBase
{

    /**
     * @var string
     */
    private $table;

    /**
     * ClientesModel constructor.
     */
    public function __construct()
    {
        $this->table = "clientes";
        parent::__construct($this->table);
    }

    public function dameCliente($email)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE email = :email;";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            $row = $statement->fetch();

            $usu = new Clientes(
                $row['id'],
                $row['nombre'],
                $row['apellido1'],
                $row['apellido2'],
                $row['dni'],
                $row['email'],
                $row['telefono'],
                $row['clave'],
                $row['fecha_alta']

            );

        }

        return $usu;
    }

   
    public function dameDatosCliente($id)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE id = :id ";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            $table = $statement->fetchAll();

            foreach ($table as $row) {

                $usu = new Clientes(
                    $row['id'],
                    $row['nombre'],
                    $row['apellido1'],
                    $row['apellido2'],
                    $row['dni'],
                    $row['email'],
                    $row['telefono'],
                    $row['clave'],
                    $row['fecha_alta']

                );


            }

        }

        return $usu;
    }

  
    public function insertarUsuario($nombre, $ape1, $ape2, $dni, $email, $tlf, $clave)
    {
        $inserto = false;

        $sql = "INSERT INTO $this->table "
            . " (nombre,apellido1,apellido2,dni,email,telefono,clave,fecha_alta)"
            . " VALUES(:nombre, :ape1, :ape2, :dni,:email,:telefono, :clave, curdate())";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':ape1', $ape1, PDO::PARAM_STR);
        $statement->bindParam(':ape2', $ape2, PDO::PARAM_STR);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':telefono', $tlf, PDO::PARAM_STR);
        $statement->bindParam(':clave', $clave, PDO::PARAM_STR);

        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            $inserto = false;
        }
        return $inserto;
    }

   


}
