<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link rel="stylesheet" href="../styles/stylesHeaderMacota.css">
</head>
<body>
    <header>
        <h1>Veterinaria Amigable</h1>
        <!-- <a href="...php">HOME</a>  usar como panel en el futuro con admin-->
        <a href="home.php">volver</a>
        <a href="../crudMascota/update.php">cerrar sesión</a>
    </header>   
</body>
 </html>

    <div class="container">
        <h2 class="register-title">Registrar un Nuevo Turno</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombres">Nombre del Animal:</label>
            <input type="text" id="nombres" name="nombres" required placeholder="Ej: Fido">

            <label for="especie">Especie:</label>
            <input type="text" id="especie" name="especie" required placeholder="Ej: Perro">

            <label for="raza">Raza:</label>
            <input type="text" id="raza" name="raza" required placeholder="Ej: Pastor Aleman">

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required placeholder="Ej: 5">

            <label for="turno">Turno:</label>
            <input type="text" id="edad" name="turno" required placeholder="DD/MM/AAAA HH:MM">

            <button type="submit" name="guardar_registro">Registrar</button>
        </form>
    </div>

