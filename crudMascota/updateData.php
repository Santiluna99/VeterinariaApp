<?php include("../db.php")?>
<?php include("../includes/headersMascotas.php")?>

<?php
if(isset($_GET['id'])){
$codigo = $_GET['id'];
$query = "SELECT * FROM mascota WHERE codigo = $codigo";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombres = $row['nombres'];
    $especie = $row['especie'];
    $raza = $row['raza'];
    $edad = $row['edad'];
    }
}
if (isset($_POST['update2'])){
    $codigo = $_GET['id'];
    $nombres = $_POST['nombres'];
    $especie = $_POST['especie']; // Variable correcta para especie
    $raza = $_POST['raza']; // Variable para raza
    $edad = $_POST['edad']; // Variable para edad

    $query = "UPDATE mascota SET nombres = '$nombres', especie = '$especie', raza = '$raza', edad = '$edad' WHERE codigo = $codigo";
    $result = mysqli_query($conn, $query);

    if (!$result){
        echo "El query de actualizar falló";
    } else {
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
            window.location = "registerMascota.php";
        </script>
        <?php 
    }
}
?>
<!-- <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ACTUALIZAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos seleccionados para actualizar:</p>
         
            <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">

            <div class="form-group">
            <input type="text" name="nombres" value="<?php print $nombres;?>"
            class = "form-control" placeholder="Actualizar nombres">
            </div>

            <div class = "form-group">
            <textarea name="especie" rows="2" class="form-control" placeholder="Actualizar Especie"><?php echo $especie;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="raza" rows="2" class="form-control" placeholder="Actualizar Raza"><?php echo $raza;?></textarea>
            </div>

            <div class = "form-group">
            <textarea name="edad" rows="2" class="form-control" placeholder="Actualizar Edad"><?php echo $edad;?></textarea>
            </div>

            <button class="btn btn-success" name="update2">Actualizar</button>
            </form>
        </div>
    </div>  -->

    
    <div class="container">
        <h2 class="register-title">ACTUALIZAR DATOS</h2>
        <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <label for="nombres">Nombre del Animal:</label>
            <input type="text" name="nombres" value="<?php print $nombres;?>" class = "form-control" placeholder="Actualizar nombres">

            <label for="especie">Especie:</label>
            <input type="text" name="especie" value="<?php print $especie;?>" class = "form-control" placeholder="Actualizar especie>">

            <label for="raza">Raza:</label>
            <input type="text" name="raza" value="<?php print $raza;?>" class = "form-control" placeholder="Actualizar raza">

            <label for="edad">Edad:</label>
            <input type="number" name="edad" value="<?php print $edad;?>" class="form-control" placeholder="Actualizar edad">

            <button type="submit" name="update2">Actualizar</button>
        </form>
    </div>
    