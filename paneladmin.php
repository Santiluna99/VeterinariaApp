<?php include("./db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="styles/panelAdmin.css">
</head>
<body>
<div class="container">
        <nav>
        <h2 class="card-title">Panel de Control</h2>
            <ul>
                <li><a href="crudMascota/registerMascota.php">Mascotas</a></li>
                <li><a href="./crudProducto/registerProducto.php">Productos</a></li>
                <li><a href="crudUsuario/registerUsuario.php">Usuarios</a></li>
                <li><a href="./crudVeterinario/registerVeterinario.php">Veterinarios</a></li>
                <li><a href="./crudCategoria/registerCategoria.php">Categorias</a></li>
                <li><a href="salir.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </div>

    <h2 class="titulo1">Compras Realizadas</h2>
    <table id="table">
        <thead>
            <tr>
                <th>ID Compra</th>
                <th>ID Usuario</th>
                <th>Nombre Usuario</th>
                <th>Nombre Producto</th>
                <th>Precio Producto</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT c.id_compra, c.id_user, u.nombre AS nombre_usuario, p.nombre_prod AS nombre_producto, p.precio_prod AS precio_producto 
                    FROM compras c
                    INNER JOIN usuarios u ON c.id_user = u.id_user
                    INNER JOIN productos p ON c.id_prod = p.id_prod";

                $result_compras = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result_compras)) { ?>
                    <tr>
                        <td><?php echo $row['id_compra']; ?></td>
                        <td><?php echo $row['id_user']; ?></td>
                        <td><?php echo $row['nombre_usuario']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['precio_producto']; ?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>

    <h2 class="titulo1">Turnos</h2>
    <table id="table">
        <thead>
            <tr>
                <th>Especie</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Turno</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query_turnos = "SELECT * FROM mascota";

                $result_turnos = mysqli_query($conn, $query_turnos);

                while ($row = mysqli_fetch_array($result_turnos)) { ?>
                    <tr>
                        <td><?php echo $row['especie']; ?></td>
                        <td><?php echo $row['raza']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td><?php echo $row['turno']; ?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>