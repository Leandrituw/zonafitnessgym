<?php
$servername = "localhost";
$usuario = "root";
$clave = "";
$dbname = "zonafitnessgym";

// Crear conexión
$conexion = new mysqli($servername, $usuario, $clave, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión Fallida: " . $conexion->connect_error);
}
?>
