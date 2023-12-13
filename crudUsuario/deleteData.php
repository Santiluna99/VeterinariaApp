<?php include("../db.php")?>

<?php
if(isset($_GET['id'])){
        $id_user = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id_user = $id_user";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "delete.php";
    </script>
    

