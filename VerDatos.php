<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="logo.png.png" type="image/x-icon">
    <title>ZONA FITNESS GYM CLIENTES</title>
    <style>
    .contacto {
        background: linear-gradient(rgba(0, 14, 41, 0.6), rgba(0, 7, 78, 0.7)), url(img/fondo.jpg);
    }
    .contacto .contenido-seccion {
        max-width: 2000px;
        margin-top: 20px;
    }
    .tabla {
        color: #fff;
        background-size: cover;
        background-position: center center;
        padding: 40px 20px;
    }
    .tabla i { 
        color: #feec02;
        display: inline-block;
        margin-right: 10px;
    }
    .tabla-contenedor {
        display: flex;
        justify-content: center;
    }
    .tabla-clientes {
        width: 100%;
        max-width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
    }
    .tabla-clientes th, .tabla-clientes td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    .tabla-clientes thead {
        background-color: #f2f2f2;
    }
    .contacto .fila-datos {
        margin-top: 50px;
        margin-bottom: auto;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        display: flex;
        flex-direction: column;
        background-color: #151623;
        color: #151623;
    }
    h1 {
        text-align: center;
    }
    .titulo {
        margin-left: 50px;
    }
    th {
        background-color: #555;
        font-weight: normal;
    }
    .contenedor-header, .contacto {
        flex: 1;
    }
    footer {
        background-color: #151623;
        padding: 0 0;
        margin-top: -79px; /* Margen superior para separar del contenido anterior */
    }
    footer .info {
        display: flex;
        max-width: 1100px;
        margin: auto;
        justify-content: space-between;
        padding: 30px 20px;
    }
    a {
        text-decoration: none;
        color: #feec02;
    }
    @media (max-width: 768px) {
        .redes {
            margin-top: 20px;
        }
        .fila-datos .col {
            flex: 1 1 100%;
        }
    }
    </style>
</head>
<body>
    <!-- MENU -->
    <div class="contenedor-header">
        <header>
            <a href="/ZonaFitnessGym/index.html" target="_blank"><img class="LogoHeader" src="logo.png.png" alt="Logo"></a>
            <h1 class="titulo">ZONA FITNESS <span class="txtRojo">GYM</span></h1>
            <div class="redes">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://x.com/home" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/zona_fitnessgym/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </header>
    </div>

    <!-- SECCION CONTACTO -->
    <section class="contacto" id="contacto">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <h1>LISTADO DE CLIENTES</h1>
            </div>
            <section class="tabla"> 
                <div class="tabla-contenedor">
                    <table class="tabla-clientes">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>DNI</th>
                                <th>Fecha De Nacimiento</th>
                                <th>Género</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Correo Electrónico</th>
                                <th>Profesión</th>
                                <th>Enfermedad</th>
                                <th>Hábito</th>
                                <th>Actividad Previa</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            require 'consulta.php'; 
                            foreach ($query as $row): ?>
                                <tr>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['Apellido']; ?></td>
                                    <td><?php echo $row['DNI']; ?></td>
                                    <td><?php echo $row['FechaDeNacimiento']; ?></td>
                                    <td><?php echo $row['Genero']; ?></td>
                                    <td><?php echo $row['Direccion']; ?></td>
                                    <td><?php echo $row['Telefono']; ?></td>
                                    <td><?php echo $row['CorreoElectronico']; ?></td>
                                    <td><?php echo $row['Profesion']; ?></td>
                                    <td><?php echo $row['Enfermedad']; ?></td>
                                    <td><?php echo $row['Habito']; ?></td>
                                    <td><?php echo $row['ActividadPrevia']; ?></td>
                                    <td><a href="editar.php?DNI=<?php echo $row['DNI'];?>">EDITAR</a></td>
                                    <td><a href="eliminar.php?DNI=<?php echo $row['DNI'];?>">ELIMINAR</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="fila-datos">
                <div class="col">
                    <a class="LinkUbi" href="https://www.google.com/maps/place/Int.+Castilla+421,+Campana,+Provincia+de+Buenos+Aires/@-34.1638543,-58.9654998,17z/data=!4m6!3m5!1s0x95bb723506a08b69:0xd9817160f1c7d9be!8m2!3d-34.1642582!4d-58.9639763!16s%2Fg%2F11c25xjm9d?entry=ttu" target="_blank">
                        <i class="fa-solid fa-location-dot"></i>
                        Castilla 421 - Campana
                    </a>
                </div>
                <div class="col">
                    <i class="fa-solid fa-phone"></i>
                    +54 9 3489 489126
                </div>
                <div class="col">
                    <i class="fa-regular fa-clock"></i>
                    Lunes a Viernes - 07:00hs - 22:00hs
                    <div>
                        Sábados - 09:00hs - 19:00hs
                    </div>
                </div>            
            </div>
        </div>
    </section>

    <footer>
        <div class="info">
            <p>&copy; 2024 - <span class="txtRojo">ZONA FITNESS GYM</span> - Todos Los Derechos Reservados</p>
            <div class="redes">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://x.com/home" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/zona_fitnessgym/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
