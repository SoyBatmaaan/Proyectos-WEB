<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Registrate!</title>
</head>
<body>
    <a href="index.php">◀ Volver al inicio</a>
    <div class="container">
        <h2>Registrate!</h2>
        <form action="" method="post">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <label for="password">Contraseña:</label>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <input type="submit" value="REGISTRARSE" href="./index.php" name="registrarse">
            <a href="iniciar_sesion.php">Iniciar sesion!</a>
        </form>
    </div>

    <?php
        include("register_db.php");
    ?>
</body>
</html>