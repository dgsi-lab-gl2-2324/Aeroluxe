<?php

/**
 * Class ClientesModel
 */
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
                $row['codcliente'],
                $row['nombre'],
                $row['direccion'],
                $row['email'],
                $row['clave'],
                $row['telef'],
                $row['fechaalta']

            );

        }

        return $usu;
    }

  
    public function dameDatosCliente($id)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE codcliente = :id ";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            $table = $statement->fetchAll();

            foreach ($table as $row) {

                $usu = new Clientes(
                    $row['codcliente'],
                    $row['nombre'],
                    $row['direccion'],
                    $row['email'],
                    $row['clave'],
                    $row['telef'],
                    $row['fechaalta']

                );


            }

        }

        return $usu;
    }

   
    public function insertarUsuario($nombre, $clave, $email, $direcc, $tlf)
    {
        $inserto = false;

        $sql = "INSERT INTO $this->table "
            . " (nombre,direccion,email,clave,telef,fechaalta)"
            . " VALUES(:nombre, :direccion, :email, :clave,:telef,curdate())";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':direccion', $direcc, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':clave', $clave, PDO::PARAM_STR);
        $statement->bindParam(':telef', $tlf, PDO::PARAM_STR);

        try {

            $save = $statement->execute();
            $inserto = true;

        } catch (PDOException $e) {

            $inserto = false;
        }
        return $inserto;
    }

    
    public function dameUnUsuario($nombre, $email, $direcc)
    {

        $usu = null;
        $sql = "SELECT * FROM $this->table WHERE nombre = :nombre AND email = :email AND direccion = :direcc";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':direcc', $direcc, PDO::PARAM_STR);


        $statement->execute();

        if ($statement->rowCount() == 1) {
            $table = $statement->fetchAll();

            foreach ($table as $row) {
                $usu = new Clientes(
                    $row['codcliente'],
                    $row['nombre'],
                    $row['direccion'],
                    $row['email'],
                    $row['clave'],
                    $row['telef'],
                    $row['fechaalta']

                );
            }
        }

        return $usu;
    }

}
