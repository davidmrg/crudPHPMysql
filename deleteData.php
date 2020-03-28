<<<<<<< HEAD

=======
<?php include("includes/header.php")?>
<?php include("includes/footer.php")?>
>>>>>>> 49fe2d963a1af98d2d56f8021955b8dae9036698
<?php include("db.php")?>

<?php
if(isset($_GET['id'])){
        $codigo = $_GET['id'];
        $query = "DELETE FROM alumno WHERE codigo = $codigo";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "index.php";
    </script>
    

