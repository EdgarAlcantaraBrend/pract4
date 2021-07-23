<?php
    $nombre = $_POST['nombre'];
    $monto = $_POST['monto'];
    $fecha = $_POST['fecha'];
    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_gasto (nombre, monto, fecha) VALUES ('$nombre','$monto','$fecha')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar nada !";
    }
?>