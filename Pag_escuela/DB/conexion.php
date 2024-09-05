<?php
//declarando variables para la conexion
$servidor = "localhost"; // nombre del servidor que se va a utilizar
$usuario = "root"; // usuario del servidor
$contrasena = ""; // contraseña del servidor
$BD = "blog_escuela"; // base de datos del servidor

//Creando la conexion
$conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);

//Verificamos la conexion
if($conexion){
    
}
else{
    echo "Conexion Fallida <br>";
    die ("Connection Failed: ". mysqli_connect_error());
}