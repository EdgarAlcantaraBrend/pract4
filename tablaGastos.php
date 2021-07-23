<?php 
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_gasto, nombre , monto, fecha FROM t_gasto";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-striped" id="tablaListadoGastos">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
        while( $mostrar = mysqli_fetch_array($respuesta)){ 
            $idGasto = $mostrar['id_gasto'];
            $nombre = $mostrar['nombre'];
            $monto = $mostrar['monto'];
            $fecha = $mostrar['fecha'];
            
        ?>
        <tr>
            <td><?php echo $mostrar['id_gasto']; ?></td>
            <td><?php echo $mostrar['nombre']; ?></td>
            <td><?php echo $mostrar['monto']; ?></td>
            <td><?php echo $mostrar['fecha']; ?></td>
            <td>
                <form action="servidor/eliminarGasto.php" method="post">
                    <input type="text" value="<?php echo $idGasto; ?>" name="idEliminar" required hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <?php
        } 
        ?>
    </tbody>
</table>