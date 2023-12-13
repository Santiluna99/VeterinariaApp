<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styleLogin.css">
    <title>Document</title>
</head>
<body>
    <div class="section">
        <div class="box1">
        <img class="img" src="../imagenes/Animales.jpg" alt="">
        </div>

        <div class="box2">
            <h2>Iniciar Sesión</h2>
            <form action="userValidator.php" method="post">
                <!-- Username -->
                <label for="name">Email</label><br>
                <input id="labe1" type="email" name="email"> <br>
                <!-- Password -->
                <label for="username">Contraseña</label> <br>
                <input id="labe1" type="password" name="clave"> <br> 
                <input id="input__1" type="submit" value="Iniciar Sesión">
                <br><br>

                <p>¿Todavía no tiene cuenta?</p>
                <a id="" href="../userRegister/register.php">Registrate aquí</a>

            </form>       

        </div>

    </div>
    
</body>
</html>