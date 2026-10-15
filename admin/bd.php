<?php

$servidor = "localhost";
$baseDatos = "restaurant";
$usuario = "root";
$contrasenia = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $contrasenia);

    echo "Conexion establecida";
} catch (Exception $error) {
    echo $error->getMessage();
}

?>