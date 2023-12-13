<?php
include("../db.php");
session_start();

if (isset($_POST['guardar_producto'])) {
    if (isset($_POST['id_producto'])) {
        $id_user = $_SESSION['id_user']; // Reemplaza esto por cómo obtienes el id del usuario
        $id_productos = $_POST['id_producto'];

        foreach ($id_productos as $id_producto) {
            $query = "INSERT INTO compras (id_usuario, id_prod) VALUES ('$id_user', '$id_producto')";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                die("Fallo en el query. Existe un problema en la base de datos.");
            }
        }

        echo "<script>alert('¡Compra realizada con éxito!');</script>";
        echo "<script>window.location = 'home.php';</script>";
    } else {
        echo "No se ha seleccionado ningún producto.";
    }
}
?>
