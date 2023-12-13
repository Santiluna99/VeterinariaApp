<?php include("../db.php")?>
<?php include("../includes/headersVeterinarios.php")?>

<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">LEER DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table-fill">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>DNI</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php
                        $query = "SELECT * FROM veterinarios";
                        $result_productos = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_productos)){?>
                            <tr>
                                <td class="text-left"><?php echo $row['nombre']?></td>
                                <td class="text-left"><?php echo $row['email']?></td>
                                <td class="text-left"><?php echo $row['dni']?></td>
                                <td class="text-left"><?php echo $row['especialidad']?></td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 