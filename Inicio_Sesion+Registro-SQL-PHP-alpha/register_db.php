<?php
    include("connect_db.php");

    if(isset($_POST['registrarse'])){
        if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1){
            // nombre de variable = post nombre del atributo "name" de la etiqueta
            $usuario = trim($_POST["usuario"]);
            $contrasena = trim($_POST["contrasena"]);

            // nombre de variable = Query para insertar los datos en la tabla
            $registrar_datos = "INSERT INTO `usuarios`(`ID`, `usuario`, `contrasena`) VALUES ('','$usuario','$contrasena')";

            $registrar_datos_query = mysqli_query($conexion,$registrar_datos);
             
            if ($registrar_datos_query){
                header("location:index.php");
            }else{
                ?> 
	    	    <h3>Ha ocurrido un error :(</h3>
                <?php
            }
        }
    }
?>