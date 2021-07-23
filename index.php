<?php 
    include "header.php";
?>

    <div class="container" style="margin-top: -45px;" style="font-family: 'Bebas Neue', cursive; font-family: 'Fjalla One', sans-serif;">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h2 class="font-weight-light"><strong><span style="color: black;">Gastos Personales</span></strong></h2>
                <p class="lead">
                    <div class="row">
                        <div class="col">
                            <form action="servidor/agregarGasto.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <label for="nombre">Nombre de gasto</label><br>
                                        <textarea name="nombre" id="nombre" cols="30" rows="3" class="form-control" required></textarea><br>
                                        <label for="monto">Ingresa el monto</label><br>
                                        <input type="text" name="monto" class="form-control" required pattern="[0-9]+"><br>
                                        <label for="fecha">Seleccionar Fecha</label>
                                        <input type="date" required class="form-control" name="fecha" required>
                                        <br>
                                        <button class="btn btn-primary">Agregar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="tablaGastos"></div>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>

<?php 

    include "footer.php";
?>
<script>
    $(document).ready(function(){
        $('#tablaGastos').load('tablaGastos.php');
    });
</script>
