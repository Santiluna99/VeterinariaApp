<?php include("../includes/headersVeterinarios.php")?>
    <div class="container">
        <h2 class="register-title">Registrar un Nuevo Veterinario</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombres">Nombre:</label>
            <input type="text" id="nombres" name="nombre" required placeholder="Nombre">
            <label for="nombres">Email:</label>
            <input type="text" id="nombres" name="email" required placeholder="E-mail">

            <label for="especie">DNI:</label>
            <input type="text" id="especie" name="dni" required placeholder="Dni">

            <label for="raza">Especialidad:</label>
            <input type="text" id="raza" name="especialidad" required placeholder="Especialidad">

            <button type="submit" name="guardar_registro">Registrar</button>
        </form>
    </div>

