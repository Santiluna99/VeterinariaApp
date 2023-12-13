<?php
include("./db.php");

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
    <link rel="stylesheet" href="./styles/styleIndex.css">
</head>
<body>
    
<nav class="navbar">
    <div class="logo"><h1>Veterinaria Amigable</h1></div>
    <ul class="menu">
        <li><a href="./userRegister/register.php">Registrarse</a></li>
        <li><a href="./userLogin/login.php">Iniciar sesión</a></li>
    </ul>
</nav>

<main>
    <h2 class="subtitulo"> ¡Inicia sesión o registrate para comprar!</h2>
    <div class="flex-container">
    <?php
    // Verifica si hay resultados de la consulta
    if ($result && $result->num_rows > 0) {
        // Imprime los datos de cada fila como tarjetas (cards)
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<img src=" . $row['imgURL'] . " />";
            /* echo "<h2>" . $row['nombre_prod'] . "</h2>";
            echo "<p>Precio: $" . $row['precio_prod'] . "</p>";
            echo "<p>Categoría: " . $row['categoria'] . "</p>"; */
            echo "</div>";
        }
    } else {
        echo "No hay productos disponibles.";
    }
    ?>

     <!-- <div>
       <img
         src="imagenes/1.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/2.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/3.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/4.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/5.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/6.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/7.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/8.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/9.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/10.jpg"
         alt=""
       />
     </div> 
     <div>
       <img
         src="imagenes/11.jpg"
         alt=""
       />
     </div>  -->
    </div>
</main>
<footer>
    <small>Veterinaria amigable 2023 &copy derechos reservados</small>
</footer>

</body>
</html>