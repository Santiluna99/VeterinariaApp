<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $especialidad = $_POST['especialidad'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO veterinarios(nombre, email, dni, especialidad) VALUES ('$nombre','$email','$dni','$especialidad')";
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
    window.location = "registerVeterinario.php";
    </script>
