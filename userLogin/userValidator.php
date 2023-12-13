<?php
include("../db.php");
include("../session.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["clave"])) {
    $email = $_POST["email"];
    $clave = $_POST["clave"];

    // Consulta SQL para verificar el usuario en la tabla usuarios
    $query = "SELECT id_rol FROM usuarios WHERE email = '$email' AND clave = '$clave'";
    $query_user = "SELECT id_user FROM usuarios WHERE email = '$email' AND clave = '$clave'";
    $result = $conn->query($query);
    $result_idUser = $conn->query($query_user);

    if ($result->num_rows == 1) {
        // Obtener el tipo de usuario
        $row = $result->fetch_assoc();
        $id_rol = $row['id_rol'];

        $row = $result_idUser->fetch_assoc();
        $id_user = $row['id_user'];

        // Usuario autenticado correctamente
        $_SESSION["email"] = $email;
        $_SESSION["id_user"] = $id_user;

        // Redirigir según el tipo de usuario
        if ($id_rol == 1) {
            header('location: ../paneladmin.php');
        } else {
            header('location: ../home/home.php');
        }
        exit();
    } else {
        // Usuario o contraseña incorrectos
        echo "<script>";                        //
        echo "alert('Usuario invalido');";      // ARREGLAR ALERT DE USUARIO INVALIDO
        echo "</script>";                       //
        header('location: login.php');
        die();
    }
} else {
    echo "No se recibieron datos del formulario.";
}
?>