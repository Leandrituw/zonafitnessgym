<?php 
    require 'conexion.php';

    if (isset($_REQUEST['DNI'])){
        $query = "DELETE FROM clientes  WHERE DNI = ". $_REQUEST['DNI'];
        $result = mysqli_query($conexion, $query);
        if ($result){
            echo "<script>alert('Se Elimino El Cliente');
            location.href = 'VerDatos.php';
            </script>";
        }else{
            echo "<span>No Se Pudo Eliminar El Cliente</span>";
        }
    }
?>