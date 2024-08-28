<?php
//declarando variables para la conexion
$servidor = "localhost:3307"; // nombre del servidor que se va a utilizar
$usuario = "root"; // usuario del servidor
$contrasena = ""; // contraseña del servidor
$BD = "blog_escuela"; // base de datos del servidor

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$BD);

if($conexion){
    echo "Conexion Exitosa";
}
else{
    echo "Conexion Fallida <br>";
    die ("Connection Failed: ". mysqli_connect_error());
}