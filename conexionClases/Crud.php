<?php 
include_once 'Conecta.php';
include_once 'Registro.php';

// Obtener la conexión a la base de datos
$database = new Database();
$db = $database->getConnection();

// Instanciar el objeto Registro
$registro = new Registro($db);

// Crear un nuevo registro
$registro->nombre = "Nuevo Registro";
$registro->descripcion = "Descripción del nuevo registro";
if($registro->crear()) {
    echo "Registro creado exitosamente.\n";
} else {
    echo "No se pudo crear el registro.\n";
}

// Leer registros
$stmt = $registro->leer();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    echo "ID: $id, Nombre: $nombre, Descripción: $descripcion\n";
}

// Actualizar un registro
$registro->id = 1;
$registro->nombre = "Registro Actualizado";
$registro->descripcion = "Descripción actualizada";
if($registro->actualizar()) {
    echo "Registro actualizado exitosamente.\n";
} else {
    echo "No se pudo actualizar el registro.\n";
}

// Eliminar un registro
$registro->id = 1;
if($registro->eliminar()) {
    echo "Registro eliminado exitosamente.\n";
} else {
    echo "No se pudo eliminar el registro.\n";
}
?>