<?php

class EntradaModel extends EntidadBase
{

    /**
     * @var string
     */
    private $table;

    /**
     * EntradaModel constructor.
     */
    public function __construct()
    {
        $this->table = "entrada";
        parent::__construct($this->table);
    }

     
    public function dameDatosEntrada($id)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE id = :id ";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':id', $id, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            $table = $statement->fetchAll();

            foreach ($table as $row) {

                $usu = new Entrada(
                    $row['id'],
                    $row['id_cliente'],
                    $row['tipo_entrada'],
                    $row['nombre'],
                    $row['email'],
                    $row['telefono']
                );
            }

        }

        return $usu;
    }

    public function dameEntradaPorIdCliente($id_cliente)
    {
        $usu = null;

        $sql = "SELECT * FROM $this->table WHERE id_cliente = :id_cliente;";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
        $statement->execute();

        if ($statement->rowCount() == 1) {

            $row = $statement->fetch();

            $usu = new Entrada(
                $row['id'],
                    $row['id_cliente'],
                    $row['tipo_entrada'],
                    $row['nombre'],
                    $row['email'],
                    $row['telefono']
            );

        }

        return $usu;
    }

  
    public function insertarEntrada($id_cliente, $tipo_entrada, $nombre, $email, $telefono)
    {
        $inserto = false;

        $sql = "INSERT INTO $this->table "
            . " (id_cliente,tipo_entrada,nombre,email,telefono) "
            . " VALUES(:id_cliente, :tipo_entrada, :nombre,:email,:telefono)";
        $statement = $this->db->prepare($sql);

        $statement->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
        $statement->bindParam(':tipo_entrada', $tipo_entrada, PDO::PARAM_STR);
        $statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':telefono', $telefono, PDO::PARAM_STR);

        try {
            $save = $statement->execute();
            $inserto = true;
        } catch (PDOException $e) {
            $inserto = false;
        }
        return $inserto;
    }
}
