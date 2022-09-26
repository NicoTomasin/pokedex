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
<main>

    <h1 class="text-center">Ingrese los datos del pokemon</h1>

    <div class="container">
        <form action="procesarAlta.php" class="col" method="POST" enctype="multipart/form-data">
            <div class="row">
                <label>Numero Pokedex:</label>
                <input required type="text" name="numero_id">
            </div>
            <div class="row">
                <label>Nombre:</label>
                <input required type="text" name="nombre">
            </div>
            <div class="row ">
                <label>Tipo:</label>
                <input required type="text" name="tipo">
            </div>
            <div class="row">
                <label>Descripcion:</label>
                <input required type="text" name="descripcion">
            </div>
            <div class="row">
                <label>Añadir imagen:</label>
                <input required name="archivo" id="archivo" type="file"/>
            </div>
            <div class="row">
                <input type="submit" name="subir" class="btn btn-secondary btn-lg" value="Enviar">
            </div>
        </form>
    </div>

</main>
</body>
</html>
