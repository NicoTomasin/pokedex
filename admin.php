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
<?php
session_start();
if(!isset($_SESSION["session"]) || $_SESSION["session"] != true) {
    header("location: index.php");
    exit();
}
?>
<?php include './Componentes/navbar.php';?>
</body>
</html>



