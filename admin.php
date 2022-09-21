<?php
session_start();
if(isset($_SESSION["session"])&& $_SESSION["session"]==true)
{
    echo '<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pokedex ADMIN</title>
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
            <a class="navbar-brand" href="admin.php">Pokedex ADMIN</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Listado</a></li>
            <li><a href="#">Buscador</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="cerrarsession.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
        </ul>
    </div>
</nav>';

}else
{
    header("location: index.php");
    exit();
}
?>
</body>
</html>



