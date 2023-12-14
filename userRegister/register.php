<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/styleregister.css">
    <title>Register</title>
</head>
<body>
    <div class="section">
        <div class="box1">
        <img class="img" src="../imagenes/Animales.jpg" alt="">
        </div>
        <div class="box2">
            <h2>Registra tu cuenta</h2>
            <form action="save.php" method="POST">
                <!-- Username -->
                <label for="nombre">Nombre</label><br>
                <input id="labe1" type="text" name="nombre"> <br>
                <!-- Password -->
                <label for="email">Email</label> <br>
                <input id="labe1" type="email" name="email"> <br> 

                <label for="clave">Contraseña</label> <br>
                <input id="labe1" type="password" name="clave"> <br>

                <br><br> 
                <button id="input__1"  type="submit" name="guardar_registro">Registrarse</button>


            </form>       

        </div>

    </div>
    
</body>
</html>