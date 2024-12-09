<?php

$usuario="root";
$password="";
try {
    $conexion = new PDO('mysql:host=localhost; dbname=formulario', $usuario, $password);
    
} catch (PDOException $e) {
    echo "ERROR $e";
}

?>
