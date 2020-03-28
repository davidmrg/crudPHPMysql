<<<<<<< HEAD

=======
<?php include("includes/header.php")?>
<?php include("includes/footer.php")?>
>>>>>>> 49fe2d963a1af98d2d56f8021955b8dae9036698
<?php include("db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombres = $_POST['nombres'];
    $direccion = $_POST['direccion'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO alumno(nombres, direccion) VALUES ('$nombres','$direccion')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Registro Guardado");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "index.php";
    </script>
