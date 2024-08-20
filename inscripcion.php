<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $DNI = $_POST['DNI'];
    $FechaDeNacimiento = $_POST['FechaDeNacimiento'];
    $Genero = $_POST['Genero'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $Profesion = $_POST['Profesion'];
    $Enfermedad = $_POST['Enfermedad'];
    $Habito = $_POST['Habito'];
    $ActividadPrevia = $_POST['ActividadPrevia'];

    $sql = "INSERT INTO clientes (Nombre, Apellido, DNI, FechaDeNacimiento, Genero, Direccion, Telefono, CorreoElectronico, Profesion, Enfermedad, Habito, ActividadPrevia)
    VALUES ('$Nombre', '$Apellido', '$DNI', '$FechaDeNacimiento', '$Genero', '$Direccion', '$Telefono', '$CorreoElectronico', '$Profesion', '$Enfermedad', '$Habito', '$ActividadPrevia')";

        if (mysqli_query($conexion, $sql)) {
        echo "<script>alert('Datos Ingresados'); location.href='index.html';</script>";
        } else {
        echo "<script>alert('Error: " . mysqli_error($conexion) . "');</script>";
        }

    mysqli_close($conexion);
}
?>
