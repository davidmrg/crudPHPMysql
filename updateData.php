<?php include("includes/header.php")?>
<?php include("includes/footer.php")?>
<?php include("db.php")?>

<?php
if(isset($_GET['id'])){
$codigo = $_GET['id'];
$query = "SELECT * FROM alumno WHERE codigo = $codigo";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $direccion = $row['direccion'];
    }
}
if (isset($_POST['update2'])){
    $codigo = $_GET['id'];
    $nombres = $_POST['nombres'];
    $direccion = $_POST['direccion'];
    $query = "UPDATE alumno SET nombres = '$nombres', direccion = '$direccion' WHERE codigo = $codigo";
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "index.php";
        </script>
        <?php 
    }
}
?>
<div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group">
            <input type="text" name="nombres" value="<?php print $nombres;?>"
            class = "form-control" placeholder="Actualizar Nombres">
            </div>
            <div class = "form-group">
            <textarea name="direccion" rows="2" class="form-control" placeholder="Actualizar Direccion"><?php echo $direccion;?></textarea>
            </div>
            <button class="btn btn-success" name="update2">Actualizar</button>
            </form>
        </div>
    </div>    

     
    
    