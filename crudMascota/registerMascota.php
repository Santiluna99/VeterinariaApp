<?php include("../includes/headersMascotas.php")?>
    <div class="container">
        <h2 class="register-title">Registrar un Nuevo Animal</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombres">Nombre del Animal:</label>
            <input type="text" id="nombres" name="nombres" required placeholder="Ej: Fido">

            <label for="especie">Especie:</label>
            <input type="text" id="especie" name="especie" required placeholder="Ej: Perro">

            <label for="raza">Raza:</label>
            <input type="text" id="raza" name="raza" required placeholder="Ej: Golden">

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required placeholder="Ej: 5">

            <button type="submit" name="guardar_registro">Registrar</button>
        </form>
    </div>

