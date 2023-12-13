<?php include("../db.php")?>
<?php include("../includes/headersVeterinarios.php")?>

<?php
if(isset($_GET['id'])){
$id_veterinario = $_GET['id'];
$query = "SELECT * FROM veterinarios WHERE id_veterinario = $id_veterinario";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $email = $row['email'];
    $dni = $row['dni'];
    $especialidad = $row['especialidad'];
    }
}
if (isset($_POST['update2'])){
    $id_veterinario = $_GET['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email']; // Variable correcta para email
    $dni = $_POST['dni']; // Variable para dni
    $especialidad = $_POST['especialidad']; // Variable para especialidad

    $query = "UPDATE veterinarios SET nombre = '$nombre', email = '$email', dni = '$dni', especialidad = '$especialidad' WHERE id_veterinario = $id_veterinario";
    $result = mysqli_query($conn, $query);

    if (!$result){
        echo "El query de actualizar falló";
    } else {
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
            window.location = "update.php";
        </script>
        <?php 
    }
}
?>
    <div class="container">
        <h2 class="register-title">ACTUALIZAR DATOS</h2>
        <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <label for="nombres">Veterinario/a:</label>
            <input type="text" name="nombre" value="<?php print $nombre;?>" class = "form-control" placeholder="Actualizar nombre">

            <label for="especie">Email:</label>
            <input type="text" name="email" value="<?php print $email;?>" class = "form-control" placeholder="Actualizar email>">

            <label for="raza">DNI:</label>
            <input type="text" name="dni" value="<?php print $dni;?>" class = "form-control" placeholder="Actualizar DNI">

            <label for="edad">Especialidad:</label>
            <input type="text" name="especialidad" value="<?php print $especialidad;?>" class="form-control" placeholder="Actualizar especialidad">

            <button type="submit" name="update2">Actualizar</button>
        </form>
    </div>
    