<?php include("../includes/headersCategoria.php")?>
    <div class="container">
        <h2 class="register-title">Registrar categoria</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombre_categoria">Nombre Categoria:</label>
            <input type="text" id="nombres" name="nombre_categoria" required placeholder="Categoria">
            <button type="submit" name="guardar_registro">Registrar</button>
            <?php include("./delete.php")?>
        </form>
    </div>

