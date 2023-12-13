<?php include("../includes/headersProductos.php")?>
<?php
include("../db.php");

// Realizar la consulta para obtener los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

$sql_prod = "SELECT * FROM categorias";
$result_prod = $conn->query($sql_prod)
?>
    <div class="container">
        <h2 class="register-title">Registrar un Nuevo Producto</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombres">Producto:</label>
            <input type="text" id="nombres" name="nombre_prod" required placeholder="Titulo producto">

            <label for="especie">Precio:</label>
            <input type="text" id="especie" name="precio_prod" required placeholder="Precio">

            <label for="raza">Imagen URL:</label>
            <input type="text" id="raza" name="imgURL" required placeholder="URL">

            <label for="id_categoria">Categoria:</label>
            <select id="id_categoria" name="id_categoria">
                <?php
                 while($row = $result_prod->fetch_assoc()) {
                 echo "<option value='" . $row['id_categoria'] . "'> " . $row['nombre_categoria'] . " </option>";
                 }
                 ?>
            </select>


            <button type="submit" name="guardar_registro">Registrar</button>
        </form>
    </div>


