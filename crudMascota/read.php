<?php include("../db.php")?>
<?php include("../includes/headersMascotas.php")?>

<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">LEER DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table-fill">
                    <thead>
                        <tr>
                            <th class="text-left">Nombre Animal</th>
                            <th class="text-left">Especie</th>
                            <th class="text-left">Raza</th>
                            <th class="text-left">Edad</th>
                            

                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php
                        $query = "SELECT * FROM mascota";
                        $result_mascota = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_mascota)){?>
                            <tr>
                                <td class="text-left"><?php echo $row['nombres']?></td>
                                <td class="text-left"><?php echo $row['especie']?></td>
                                <td class="text-left"><?php echo $row['raza']?></td>
                                <td class="text-left"><?php echo $row['edad']?></td>
                                
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 