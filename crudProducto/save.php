<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombre_prod = $_POST['nombre_prod'];
    $precio_prod = $_POST['precio_prod'];
    $imgURL = $_POST['imgURL'];
    $id_categoria= $_POST['id_categoria'];

    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO productos(nombre_prod, precio_prod, imgURL, id_categoria) VALUES ('$nombre_prod','$precio_prod','$imgURL','$id_categoria')";
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
    window.location = "registerProducto.php";
    </script>


