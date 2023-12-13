<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombres = $_POST['nombres'];
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $edad = $_POST['edad'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO mascota(nombres, especie, raza, edad) VALUES ('$nombres','$especie','$raza','$edad')";
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
    window.location = "registerMascota.php";
    </script>
