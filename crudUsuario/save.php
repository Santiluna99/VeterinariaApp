<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $id_rol = $_POST['id_rol'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO usuarios (nombre, email, clave, id_rol) VALUES ('$nombre','$email','$clave','$id_rol')";
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
    window.location = "registerUsuario.php";
    </script>
