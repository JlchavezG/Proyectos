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
// crear la funcion para leer los registros 
public function leer(){
    $consulta = "SELECT id, nombre , descripcion FROM ".$this->table_name;
    $stmt = $this->conecta->prepare($consulta);
    $stmt->execute();

    return $stmt;
}

// Actualizar los regustros 
public function actualizar(){
    $consulta = "UPDATE ".$this->table_name. "SET nombre = :nombre, descripcion = :descripcion WHERE id = :id";
    $stmt = $this->conecta->prepare($consulta);

    $this->nombre = htmlspecialchars(strip_tags($this->nombre));
    $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
    $this->id = htmlspecialchars(strip_tags($this->id));

    $stmt->bindParam(":nombre",$this->nombre);
    $stmt->bindParam(":descripcion",$this->descripcion);
    $stmt->bindParam(":id",$this->id);
    
    if($stmt->execute()){
        return true;
    }
    return false;    
}
// crear funcion eliminar 
public function eliminar(){
    $consulta = "DELETE FROM ".$this->table_name. "WHERE id = :id";
    $stmt = $this->conecta->prepare($consulta);

    $this->id = htmlspecialchars(strip_tags($this->id));
    $stmt->bindParam(":id",$this->id);
    if($stmt->execute()){
        return true;
    }
    return false;
}
}
?>