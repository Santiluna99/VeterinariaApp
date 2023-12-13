<?php include("../includes/headersUsuario.php")?>
    <div class="container">
        <h2 class="register-title">Registrar Usuario</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombre">Nombre Usuario</label>
            <input type="text" id="nombres" name="nombre" required placeholder="Usuario">

            <label for="email">Email</label>
            <input type="email" id="especie" name="email" required placeholder="Email">

            <label for="clave">Contraseña:</label>
            <input type="password" id="raza" name="clave" required placeholder="Contraseña">

            <label for="id_rol">Rol:</label>
            <input type="text" id="edad" name="id_rol" required placeholder="Rol">

            <button type="submit" name="guardar_registro">Registrar</button>
        </form>
    </div>

