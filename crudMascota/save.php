<?php 
include("../db.php");

if (isset($_POST['guardar_registro'])){
    // Sanitizar y validar las entradas del usuario
    $nombres = filter_var($_POST['nombres'], FILTER_SANITIZE_STRING); //Sanitiza la entrada eliminando todas las etiquetas HTML
    $especie = filter_var($_POST['especie'], FILTER_SANITIZE_STRING);
    $raza = filter_var($_POST['raza'], FILTER_SANITIZE_STRING);
    $edad = filter_var($_POST['edad'], FILTER_VALIDATE_INT); // Valida que la entrada 'edad' sea un número entero

    if ($nombres && $especie && $raza && $edad !== false) {
        // Preparar la consulta
        $stmt = $conn->prepare("INSERT INTO mascota (nombres, especie, raza, edad) VALUES (?, ?, ?, ?)");

        // Vincular los parámetros
        $stmt->bind_param("sssi", $nombres, $especie, $raza, $edad);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>alert('Registro Guardado');</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: Entrada inválida.";
    }

    // Redireccionar a index
    echo "<script>window.location = 'registerMascota.php';</script>";
}
?>
<!-- <script x> alert("hola") </script 1=2 -->