<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombre_categoria = $_POST['nombre_categoria'];
}
    $query = "INSERT INTO categorias (nombre_categoria) VALUES ('$nombre_categoria')";
	//die( $query);
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
    window.location = "registerCategoria.php";
    </script>
