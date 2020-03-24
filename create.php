<?php include("includes/header.php")?>
<?php include("includes/footer.php")?>




<div class ="card text-center">
    <div class="card-body">
        <h1 class="card-title">CREAR REGISTRO</h1>
        <p class="card-text">Ingrese los datos a continuación</p>

        <form action="save.php" method="POST">
            <div class="form-group">
            <input type="text" name="nombres" clas="form-control" placeholder="Ingrese Nombres" autofocus>
            </div>

            <div class="form-group">
            <input type="text" name="direccion" clas="form-control" placeholder="Ingrese Dirección">
            </div>
            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>
