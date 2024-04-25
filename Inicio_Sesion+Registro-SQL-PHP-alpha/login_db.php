<?php
    session_start();
    include("connect_db.php");

    if(isset($_POST['logearse'])){
        // nombre de variable = post nombre del atributo "name" de la etiqueta
        $usuario = trim($_POST["usuario"]);
        $contrasena = trim($_POST["contrasena"]);

        // nombre de variable = Query para seleccionar los datos que queremos VALIDAr
        // para el inicio de sesion.
        $comparar_datos = "SELECT `ID`, `usuario`, `contrasena` FROM `usuarios` WHERE `usuario` = '$usuario' AND `contrasena` = '$contrasena'";
        
        $comparar_datos_query = mysqli_query($conexion,$comparar_datos);

        // En el caso de que se haya pasado la validacion, guardamos todos los datos
        // del usuario que inicio sesion en variables $_SESSION[]. y redireccionamos
        // al usuario a la pagina principal.
        if($datos=$comparar_datos_query->fetch_object()){
            $_SESSION["id"] = $datos->ID;
            $_SESSION["user"] = $datos->usuario;
            $_SESSION["pass"] = $datos->contrasena;
            header("location: index.php");
        }else{
            // Si la validacion fue incorrecta, mostrara este mensaje de error!
            echo '<b style="color:red;">Usuario o contraseña incorrectos! :(</b>';
        }
    }
?>