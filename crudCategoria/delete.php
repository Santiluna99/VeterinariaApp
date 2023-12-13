<?php include("../db.php")?>
<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <br><br><br>
            <h2 class="card-title">Eliminar categoria</h2>
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM categorias";
                        $result_mascota = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_mascota)){?>
                            <tr>
                                <td><?php echo $row['id_categoria']?></td>
                                <td><?php echo $row['nombre_categoria']?></td>
                                <td>
                                    <a href="deleteData.php?id=<?php echo $row['id_categoria']?>">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 