<?php 
class Database{
    private $host = "localhost";
    private $db_nombre = "Proyectos";
    private $username = "root";
    private $password = "";
    public $conecta;

    public function getConexion(){
        $this->conecta = null;

        try{
            $this->conecta = new PDO("mysql:host=".$this->host. ";db_nombre=".$this->db_nombre, 
            $this->username, $this->password);
            $this->conecta->exec("set names utf8");
        }
        catch(PDOException $exeption){
            echo "Error de conexion: ".$exeption->getMessage();
        }
        return $this->conecta;
    }
}



?>