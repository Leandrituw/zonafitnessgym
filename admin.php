<?php
require 'conexion.php';

$Usuario = $_POST['Usuario'];
$Clave = $_POST['Clave'];

$consulta = "SELECT COUNT(*) AS contar FROM administradores WHERE Usuario = '$Usuario' AND Clave = '$Clave'";
$query = mysqli_query($conexion, $consulta);

$array = mysqli_fetch_array($query);
if ($array['contar'] == 0) {
    echo "<script>alert('Usuario o Contraseña Incorrectos'); location.href='admin.html';</script>";
} else {
    echo "<script>location.href='VerDatos.php';</script>";
}
?>
