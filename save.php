
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
