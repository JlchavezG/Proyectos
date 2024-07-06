<?php 

class Registro{
private $conecta;
private $table_name = "registros";

public $id;
public $nombre;
public $descripcion;

public function __construct($db)
{
    $this->conecta = $db;
}
// vamos a crear el nuevo registro 
public function crear(){
    $consulta = "INSERT INTO ". $this->table_name. " SET nombre=:nombre, descripcion=:descripcion";
    $stmt = $this->conecta->prepare($consulta);
    
    $this->nombre = htmlspecialchars(strip_tags($this->nombre));
    $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
    
    $stmt->bindParam(":nombre",$this->nombre);
    $stmt->bindParam(":descripcion",$this->descripcion);

    if($stmt->execute()){
        return true;
    }
    return false;
}





}


?>