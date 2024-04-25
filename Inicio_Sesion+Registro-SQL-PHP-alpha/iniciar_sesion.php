<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
<title>Bienvenido!</title>
<style>
</style>
</head>
<body>
    <a href="index.php">◀ Volver al inicio</a>
    <div class="container">
        <h2>Inicia sesion!</h2>
        <?php
        include("login_db.php");
        ?>
        <form action="#" method="post">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" placeholder="Usuario" name="usuario" required>
            <label for="password">Contraseña:</label>
            <input type="password" placeholder="Contraseña" name="contrasena" required>
            <input type="submit" value="INGRESAR" name="logearse">
            <a href="./registrarse.php">Registrarse</a>
        </form>
    </div>

    
</body>
</html>