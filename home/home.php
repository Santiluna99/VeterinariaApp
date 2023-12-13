<?php
include("../db.php");

// Realizar la consulta para obtener los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop veterinaria amigable</title>
    <link rel="stylesheet" href="../styles/styleIndex.css">
</head>
<body>
    
<nav class="navbar">
    <div class="logo"><h1>Veterinaria Amigable</h1></div>
    <ul class="menu">
       <li><a href="registerMascota.php">Agendar turno</a></li>
        <li><a href="./userRegister/register.php">cerrar sesión</a></li>
    </ul>
</nav>

<main>
    <div class="flex-container">
      <?php
      // Verifica si hay resultados de la consulta
      if ($result && $result->num_rows > 0) {
          // Imprime los datos de cada fila como tarjetas (cards)
          while($row = $result->fetch_assoc()) {
              echo "<form action='saveProduct.php' method='POST'>";
              echo "<div class='card'>";
              echo "<img src=" . $row['imgURL'] . " />";
              /* echo "<h2>" . $row['nombre_prod'] . "</h2>";
              echo "<p>Precio: $" . $row['precio_prod'] . "</p>";
              echo "<p>Categoría: " . $row['categoria'] . "</p>"; */
              echo "<input type='hidden' name='id_producto[]' value='" . $row['id_prod'] . "'>";
              echo "<button type='submit' name='guardar_producto'> Comprar </button>";
              echo "</div>";
              echo "</form>";
          }
      } else {
          echo "No hay productos disponibles.";
      }
      ?>
    </div>

</main>
<footer>
    <small>Veterinaria amigable 2023 &copy derechos reservados</small>
</footer>

</body>
</html>