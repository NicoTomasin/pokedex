<?php
session_start();
if(!isset($_SESSION["session"]) || $_SESSION["session"] != true) {
    header("location: index.php");
    exit();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<header>

</header>
<div class="container">
    <div class="row">
        <div class="col-1">
            <img class="logo" src="img/logo.png">
        </div>
        <div class="col-5 text-center">
            <h1>Pokedex</h1>
        </div>
        <div class="col-6 text-end">
            <h4>usuario ADMIN</h4>
            <a href="cerrarSession.php">Salir</a>
        </div>
    </div>
    <?php
    require_once "./Componentes/buscador.php"
    ?>
</div>
<?php
require_once "obtenerTodosLosPokemones.php"
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>