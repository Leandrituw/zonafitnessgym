<?php
require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="shortcut icon" href="logo.png.png" type="image/x-icon">
    <title>ZONA FITNESS GYM EDITAR</title>
    <style>
        h1,h3{
            font-weight: bold;
        }
        .btn-custom {
            background-color: #feec02;
            color: #000;
            font-weight: bold;
            margin-right: 10px;
        }
        .btn-custom:hover {
            background-color: #feec02;
            color: #000;
        }
        .btn-outline-secondary {
            background-color: #feec02;
            color: #000;
            font-weight: bold;
        }
        .btn-outline-secondary:hover {
            background-color: #feec02;
            color: #000;
        }
        .redes a {
            margin: 0 10px;
            color: #000;
        }
        footer{
            background-color: #151623;
            padding: 30px 0;
            height: 80px;
            margin-top: -80px; /* Margen superior para separar del contenido anterior */
        }
        .info {
            margin-right: 20px;
            margin-top: 20px;
        }
        h1 {
            margin-left: 120px;
        }
        .fila2{
            margin-left: 10px;
            margin-top: 10px;
        }
        .fila2 .col {
            margin-bottom: 20px; /* Agregar margen inferior al contenedor de CANCELAR */
        }
    </style>
</head>
<body>
    <!-- MENU -->
    <div class="contenedor-header">
        <header>
            <a href="/ZonaFitnessGym/index.html" target="_blank"><img class="LogoHeader" src="logo.png.png" alt="Logo"></a>
            <h1>ZONA FITNESS <span class="txtRojo">GYM</span></h1>
            <div class="redes">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/home" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/zona_fitnessgym/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </header>
    </div>

    <!-- SECCION FORMULARIO -->
    <section class="contacto" id="contacto">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="info">
                <h3>EDITAR DATOS DEL CLIENTE</h3>
                </div>
            </div>
            <form name="formulario" action="editar.php" method="post">
                <?php
                $DNI = $_REQUEST['DNI'];
                echo '<input type="hidden" name="DNI" value="'.$DNI.'">';
                $query = "SELECT * FROM clientes WHERE DNI = '$DNI'";
                $result = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_array($result)){
                ?>
                <div class="fila">
                    <div class="col">
                        <input type="text" name="Nombre" value="<?php echo $row['Nombre']; ?>" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="Apellido" value="<?php echo $row['Apellido']; ?>" placeholder="Apellido" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="DNI" value="<?php echo $row['DNI']; ?>" placeholder="DNI" class="form-control" readonly>
                    </div>
                </div>
                <div class="fila">
                    <div class="col">
                        <input type="text" name="FechaDeNacimiento" value="<?php echo $row['FechaDeNacimiento']; ?>" placeholder="Fecha de Nacimiento" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="Genero" value="<?php echo $row['Genero']; ?>" placeholder="Género" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="Direccion" value="<?php echo $row['Direccion']; ?>" placeholder="Dirección" class="form-control">
                    </div>
                </div>
                <div class="fila">
                    <div class="col">
                        <input type="text" name="Telefono" value="<?php echo $row['Telefono']; ?>" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="col">
                        <input type="email" name="CorreoElectronico" value="<?php echo $row['CorreoElectronico']; ?>" placeholder="Correo Electrónico" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="Profesion" value="<?php echo $row['Profesion']; ?>" placeholder="Profesión" class="form-control">
                    </div>
                </div>
                <div class="fila">
                    <div class="col">
                        <input type="text" name="Enfermedad" value="<?php echo $row['Enfermedad']; ?>" placeholder="Enfermedad" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="Habito" value="<?php echo $row['Habito']; ?>" placeholder="Hábito Insalubre" class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" name="ActividadPrevia" value="<?php echo $row['ActividadPrevia']; ?>" placeholder="Actividad Previa" class="form-control">
                    </div>
                </div>
                <?php } ?>

                <div class="fila1">
                    <div class="col text-center">
                        <button type="submit" name="guardar" class="btn btn-custom">GUARDAR</button>
                    </div>
                </div>
                <div class="fila2">
                    <div class="col text-center">
                        <a href="VerDatos.php" class="btn btn-custom">CANCELAR</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="info">
            <p>&copy; 2024 - <span class="txtRojo">ZONA FITNESS GYM</span> - Todos Los Derechos Reservados</p>
            <div class="redes">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/home" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/zona_fitnessgym/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_REQUEST['guardar'])){
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
    
    $query = "UPDATE clientes SET Nombre='$Nombre', Apellido='$Apellido', FechaDeNacimiento='$FechaDeNacimiento', Genero='$Genero', Direccion='$Direccion', Telefono='$Telefono', CorreoElectronico='$CorreoElectronico', Profesion='$Profesion', Enfermedad='$Enfermedad', Habito='$Habito', ActividadPrevia='$ActividadPrevia' WHERE DNI='$DNI'";
    $result = mysqli_query($conexion, $query);
    if ($result) {
        echo '<script>
                alert("Datos Guardados");
                location.href= "VerDatos.php"; 
              </script>';
    } else {
        echo '<script>alert("Datos No Ingresados");</script>';
    }
}
mysqli_close($conexion);
?>
