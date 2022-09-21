<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pokedex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Pokedex</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Listado</a></li>
            <li><a href="#">Buscador</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="registro.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        </ul>
    </div>
</nav>

<?php
echo "<form action='registrar.php' method='post' enctype='multipart/form-data' >
    <label for='email'>Email:</label>
    <input type='text' name='email'>
    <label for='pass'>Contraseña:</label>
    <input type='password' name='pass'>
    <label for='pass'>Repetir contraseña:</label>
    <input type='password' name='pass2'>
    <input type='submit'>
</form>";
?>
</body>
</html>
