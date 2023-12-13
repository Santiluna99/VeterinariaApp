<?php include("../db.php")?>
<?php include("../includes/headersUsuario.php")?>

<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">LEER DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table-fill">
                    <thead>
                        <tr>
                           <th>Usuario</th>
                            <th>Email</th>
                            <th>Clave</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php
                        $query = "SELECT * FROM usuarios";
                        $result_mascota = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_mascota)){?>
                            <tr>
                                <td class="text-left"><?php echo $row['nombre']?></td>
                                <td class="text-left"><?php echo $row['email']?></td>
                                <td class="text-left"><?php echo $row['clave']?></td>
                                <td class="text-left"><?php echo $row['id_rol']?></td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 