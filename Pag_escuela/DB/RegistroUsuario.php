<?php
include "conexion.php"; //incluimos el archivo conexion para tener conexion con la base de datos

//guardamos en variables los datos ingresados por el usuario
$mail = $_POST["mail"];
$username = $_POST["username"];
$usersurname = $_POST["usersurname"];
$password = $_POST["password"];

//
$passwordhash = password_hash($password, PASSWORD_BCRYPT);

//consultamos si el correo ya existe
$consultaid = "SELECT Correo FROM usuario WHERE Correo = '$mail'";
$consultaid = mysqli_query($conexion,$consultaid);
$consultaid = mysqli_fetch_array($consultaid);

if (!$consultaid) {
    $sql = "INSERT INTO usuario VALUES ( '$mail', '$username', '$usersurname', '$password','$passwordhash' )";

    if (mysqli_query($conexion,$sql)) {
        echo "Tu cuenta a sido creada.<br> Inicia sesion para continuar --> <a href='Pag_escuela\Login - register\Login.html'> Iniciar Sesion </a>";
    }
    else {
        echo "Error: " . $sql .  "<br>" . mysqli_error( $conexion );
    }
}

else { 
    echo "El Correo ya esta Registrado.";
    echo "<a href='Pag escuela\Login - register\registro.html'> Intenta de nuevo. </a>";
}
//'$passwordhash'

mysqli_close($conexion);
?>;