<?php
require 'conexion.php';

$consultar = "SELECT * FROM clientes";
$query = mysqli_query($conexion, $consultar);
?>
