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
    <link rel="stylesheet" href="../styles/styleHome.css">
</head>
<body>
    
<nav class="navbar">
    <div class="logo"><h1>Veterinaria Amigable</h1></div>
    <ul class="menu">
       <li><a href="registerMascota.php">Agendar turno</a></li>
        <li><a href="../salir.php">cerrar sesión</a></li>
    </ul>
</nav>

<main>
   <!--  <div class="flex-container"> -->
    <section class="products">
      <div class="all-products">
        <?php
        // Verifica si hay resultados de la consulta
        if ($result && $result->num_rows > 0) {
            // Imprime los datos de cada fila como tarjetas (cards)
            while($row = $result->fetch_assoc()) {
                echo "<form action='saveProduct.php' method='POST'>";
                echo "<div class='product'>";
                echo "<img src=" . $row['imgURL'] . " />";
                echo "<div class='product-info'>";
                echo "<h4 class='product-title'>" . $row['nombre_prod'] . "</h4>";
                echo "<p class='product-price'>USD $" . $row['precio_prod'] . "</p>";
                echo "<input type='hidden' name='id_producto[]' value='" . $row['id_prod'] . "'>";
                echo "<button type='submit' class='product-btn' name='guardar_producto'> Comprar </button>";
                echo "</div>";
                echo "</div>";
                echo "</form>";
            }
        } else {
            echo "No hay productos disponibles.";
        }
        ?>
      </div>
    </section>
    <!-- </div> -->

</main>
<footer>
    <small>Veterinaria amigable 2023 &copy derechos reservados</small>
</footer>

</body>
</html>