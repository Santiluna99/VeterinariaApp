<?php?>
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
                <li><a href="./crudProducto/registerProducto.php"> Productos</a></li>
                <li><a href="crudUsuario/registerUsuario.php"> <td>Usuarios</td></a></li>
                <li><a href="./crudVeterinario/registerVeterinario.php"> Veterinarios</a></li>
                <li><a href="./crudCategoria/registerCategoria.php"> Categorias</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </nav>
    </div>





    <h2 class="titulo1">Compras Realizadas</h2>
  <table id="table">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Proveedor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Lápiz</td>
        <td>$1.00</td>
        <td>Papelería López</td>
      </tr>
      <tr>
        <td>Cuaderno</td>
        <td>$2.50</td>
        <td>Papelería Hernández</td>
      </tr>
      <tr>
        <td>Pluma</td>
        <td>$0.75</td>
        <td>Papelería Pérez</td>
      </tr>
      <tr>
        <td>Borrador</td>
        <td>$0.50</td>
        <td>Papelería Gómez</td>
      </tr>
    </tbody>
  </table>



  <h2 class="titulo1">Turnos</h2>
  <table id="table">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Proveedor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Lápiz</td>
        <td>$1.00</td>
        <td>Papelería López</td>
      </tr>
      <tr>
        <td>Cuaderno</td>
        <td>$2.50</td>
        <td>Papelería Hernández</td>
      </tr>
      <tr>
        <td>Pluma</td>
        <td>$0.75</td>
        <td>Papelería Pérez</td>
      </tr>
      <tr>
        <td>Borrador</td>
        <td>$0.50</td>
        <td>Papelería Gómez</td>
      </tr>
    </tbody>
  </table>

</body>
 </html>