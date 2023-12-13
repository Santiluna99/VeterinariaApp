<?php include("../db.php")?>
<?php include("../includes/headersProductos.php")?>

<?php
if(isset($_GET['id'])){
$id_prod = $_GET['id'];
$query = "SELECT * FROM productos WHERE id_prod = $id_prod";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombre_prod = $row['nombre_prod'];
    $precio_prod = $row['precio_prod'];
    $imgURL = $row['imgURL'];
    }
}
if (isset($_POST['update2'])){
    $id_prod = $_GET['id'];
    $nombre_prod = $_POST['nombre_prod'];
    $precio_prod = $_POST['precio_prod']; // Variable correcta para especie
    $imgURL = $_POST['imgURL']; // Variable para raza

    $query = "UPDATE productos SET nombre_prod = '$nombre_prod', precio_prod = '$precio_prod', imgURL = '$imgURL' WHERE id_prod = $id_prod";
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
            <label for="nombres">Producto:</label>
            <input type="text" name="nombre_prod" value="<?php print $nombre_prod;?>" class = "form-control" placeholder="Actualizar producto">

            <label for="especie">Precio:</label>
            <input type="text" name="precio_prod" value="<?php print $precio_prod;?>" class = "form-control" placeholder="Actualizar precio">

            <label for="edad">Imagen URL:</label>
             <input type="text" name="imgURL" value="<?php print $imgURL;?>" class="form-control" placeholder="Actualizar imagen">

            <button type="submit" name="update2">Actualizar</button>
        </form>
    </div>
    

   
