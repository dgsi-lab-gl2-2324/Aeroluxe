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
                    $row['fecha_alta'],
                    $row['direccion']

                );


            }

        }

        return $usu;
    }

    public function dameClientePorDni($dni)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE dni = :dni;";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
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
                $row['fecha_alta'],
                $row['direccion']
            );

        }

        return $usu;
    }

  
    public function insertarUsuario($nombre, $ape1, $ape2, $dni, $email, $tlf, $clave, $direccion)
    {
        $inserto = false;

        $sql = "INSERT INTO $this->table "
            . " (nombre,apellido1,apellido2,dni,email,telefono,clave,fecha_alta,direccion) "
            . " VALUES(:nombre, :ape1, :ape2, :dni,:email,:telefono, :clave, curdate(), :direccion)";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':ape1', $ape1, PDO::PARAM_STR);
        $statement->bindParam(':ape2', $ape2, PDO::PARAM_STR);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':telefono', $tlf, PDO::PARAM_STR);
        $statement->bindParam(':clave', $clave, PDO::PARAM_STR);
        $statement->bindParam(':direccion', $direccion, PDO::PARAM_STR);

        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            $inserto = false;
        }
        return $inserto;
    }


    public function updateUsuario($dni, $nombre, $ape1, $ape2, $email, $tlf, $direccion)
    {
        $inserto = false;

        $sql = "UPDATE $this->table SET nombre = :nombre, apellido1 = :ape1, apellido2 = :ape2, email = :email, telefono = :telefono, direccion = :direccion WHERE dni = :dni";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':ape1', $ape1, PDO::PARAM_STR);
        $statement->bindParam(':ape2', $ape2, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':telefono', $tlf, PDO::PARAM_STR);
        $statement->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);


        try {
            $save = $statement->execute();
            $save = true;
        } catch (PDOException $e) {
            $save = false;
        }
        return $save;
    }

    public function dameTodosClientes()
    {
        $clientes = array();

        $sql = "SELECT * FROM $this->table;";
        $statement = $this->db->prepare($sql);
        $statement->execute();

        if ($statement->rowCount() >=1) {

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

}
