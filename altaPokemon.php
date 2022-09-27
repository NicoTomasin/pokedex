<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pokedex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
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
<header>
    <div class="container">
        <div id="fondo">
            <div class="row">
                <div class="col-1">
                    <a href="index.php"><img class="logo" src="img/logo.png"></a>
                </div>
                <div class="col-5 text-center">
                    <img src="img/pokemon.png" height="80">
                </div>
                <div class="col-6">
                    <div class="col-6 text-end">
                        <h4>usuario ADMIN</h4>
                        <a href="cerrarSession.php">Salir</a>

                    </div>
            </div>
            <?php
            require_once "./Componentes/buscador.php"
            ?>
        </div>
</header>
    <h1 class="text-center">Ingrese los datos del pokemon</h1>

    <div class="container">
    <div id="fondo">
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
                    <input type="submit" name="subir" class="btn btn-secondary btn-lg" value="Enviar" style="width: 100px;">
                </div>
            </form>
            </div>
        </div>



</main>
</body>
</html>
