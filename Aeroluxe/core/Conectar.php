<?php

class Conectar
{


    private $host, $user, $pass, $dbname;

    public function __construct()
    {
        $this->host = "localhost:3306";
        $this->user = "aeroluxe";
        $this->pass = "aeroluxe";
        $this->dbname = "aeroluxe";
    }

    public function getConnection()
    {

        try {
            $con = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET lc_time_names='es_ES',NAMES utf8"));
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $con;
        } catch (PDOException $ex) {
            print "Error: " . $ex->getMessage() . "<br>";
            die();
        }
    }

}

?>