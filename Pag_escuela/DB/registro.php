<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 5px;
    
}

.login.text{
    justify-content: center;
    align-items: center;
}

.login-container {
    background-color: rgb(76, 63, 255);
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
    border-radius: 6px;
    margin-top: 200px;
}

.register-container{
    background-color: rgb(76, 63, 255);
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
    border-radius: 6px;
    margin-top:20px;
}


.register-container h1{
    color: white;
    
}

.register-container h2 {
    margin-bottom: 10px;
    color: white;
}

.register-container h3{
    color: white;
}

.register-container input {
    width: 95%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.register-container button {
    width: 97%;
    padding: 10px;
    margin-top: 45px;
    background-color: #232423;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
}

.login-container h1{
    color: white;
    
}

.login-container h2 {
    margin-bottom: 10px;
    color: white;
}

.login-container h3{
    color: white;
}

.login-container input {
    width: 95%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.login-container button {
    width: 97%;
    padding: 10px;
    margin-top: 45px;
    background-color: #232423;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
}

h1{
    color: white;
}

h2{
    color: white;
}
    </style>
<!-- FIN ESTILOS -->
</head>
<body>
    <div class="register-container">
        <div class="login-text">
            <h1>Registro</h1>
        <h3>A continuacion, coloque sus datos:</h3>
        </div>
        <form action="Pag_escuela\DB\RegistroUsuario.php" method="post">
            <h3>Correo Electronico:</h3>
            <input type="text" name="mail" placeholder = "Correo Electronico"required>
            <h3>Nombre:</h3>
            <input type="text" name="username" placeholder="Nombre"required>
            <h3>Apellido:</h3>
            <input type="text" name="usersurname" placeholder="Apellido"required>
            <h3>Contraseña:</h3>
            <input type="password" name="password" placeholder="Contraseña" required>
            <!-- <input type="submit" name="enviar" class="button" value="Registrarse">  -->
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>