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
    <section class="home-register"> 
        <div class="main-register">
            <div class="register-title">
                <h2>Registra tu cuenta</h2>
            </div>
            <form class="form-register" action="save.php" method="POST">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre de usuario">
                <input type="email" name="email"  placeholder="Email">
                <input type="password" name="clave"  placeholder="Contraseña">
                
                <button type="submit" name="guardar_registro">Registrarse</button>
                <hr>
            </form>
            <div class="register-terms">
                <p>Al <em>registrarse</em> acepta nuestros <span>terminos</span> y <span>condiciones</span>.</p>
            </div>
            
        </div>
    </section>
</body>
</html>
