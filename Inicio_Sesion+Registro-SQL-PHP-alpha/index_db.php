<?php
    include("connect_db.php");
    include("login_db.php");

    // Si la variable $_SESSSION["user"] NO esta vacia, se ejecuta el siguiente codigo
    if(!empty($_SESSION["user"])){
        //Si no esta vacia, el form de la pagina principal va a mostrar los datos
        //del usuario logeado junto a un boton para cerrar la sesion...
        ?>
            <form action="#" method="post">
                <h1>Bienvenido <?php echo $_SESSION["user"];?>! Usuario N°<?php echo $_SESSION["id"];?> </h1>
                <input type="submit" value="CERRAR SESIÓN" name="deslogearse">
            </form>
        <?php
        if(isset($_POST['deslogearse'])){
            session_destroy();
            header("location: index.php");
        }
    }else{
        // Caso contrario, si la variable $_SESSSION["user"] esta vacia, quiere decir
        // que no hay sesion iniciada, ejecutando el siguiente ECHO insitando
        // a que el usuario, inicie su sesion.
        echo '<p>Para obtener su información: <a href="iniciar_sesion.php">Inicie sesión!</a></p>';
    }
?>