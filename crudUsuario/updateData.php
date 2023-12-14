<?php include("../db.php")?>
<?php include("../includes/headersUsuario.php")?>

<?php
if(isset($_GET['id'])){
$id_user = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id_user = $id_user";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $email = $row['email'];
    $clave = $row['clave'];
    $id_rol = $row['id_rol'];
    }
}
if (isset($_POST['update2'])){
    $codigo = $_GET['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email']; // Variable correcta para email
    $clave = $_POST['clave']; // Variable para raza
    $id_rol = $_POST['id_rol']; // Variable para edad

    $query = "UPDATE usuarios SET nombre = '$nombre', email = '$email', clave = '$clave', id_rol = '$id_rol' WHERE id_user = $id_user";
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
            <label for="nombre">Nombre usuario</label>
            <input type="text" name="nombre" value="<?php print $nombre;?>" class = "form-control" placeholder="Actualizar nombre">

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php print $email;?>" class = "form-control" placeholder="Actualizar email>">

            <label for="clave">Coantraseña:</label>
            <input type="text" name="clave" value="<?php print $clave;?>" class = "form-control" placeholder="Actualizar contraseña">

            <label for="id_rol">Rol:</label>
            <select id="id_rol" name="id_rol">
                <option value="1"> Admin </option>
                <option value="2" selected> Usuario </option>
            </select>

            <button type="submit" name="update2">Actualizar</button>
        </form>
    </div>
    