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
<?php include './Componentes/navbar.php';?>
<?php
echo "<form action='validar.php' method='post' enctype='multipart/form-data' >
<label for='email'>Email:</label>
<input type='text' name='email'>
<label for='pass'>Contraseña:</label>
<input type='password' name='pass'>
<input type='submit'>
</form>";
?>
</body>
</html>