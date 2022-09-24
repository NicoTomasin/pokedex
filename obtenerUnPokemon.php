<?php
session_start();
error_reporting(0);

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<body>
<div class="container">
    <?php
    if ($_SESSION["session"] == "true") {
        echo '<div class="container">
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
    </div>';
    } else {
        echo '<div id="fondo">
  <div class="row">
      <div class="col-1">
          <a href="index.php"><img class="logo" src="img/logo.png"></a>
      </div>
      <div class="col-5 text-center">
          <img src="img/pokemon.png" height="80">
      </div>
      <div class="col-6">
          <form action="login.php" method="post">
              <input name="usuario" type="text" placeholder="Usuario">
              <input name="pass" type="password" placeholder="Contraseña">
              <button id="login" type="submit">Ingresar</button>
          </form>
      </div>
  </div></div>';
    }
    ?>
    <div id="fondo" class="row mt-5">
        <div class="col-2 text-center">
            <h3>Imagen</h3>
        </div>
        <div class="col-2 text-center">
            <h3>Tipo</h3>
        </div>
        <div class="col-2 text-center">
            <h3>Numero</h3>
        </div>
        <div class="col-2 text-center">
            <h3>Nombre</h3>
        </div>
        <?php
        if (isset($_SESSION)) {
            if ($_SESSION["session"] == "true") {
                echo "<div class='col-4 text-center'>
                <h3>Acciones</h3>
                </div>";
            }
        }
        ?>

        <div id="fondo" class="row">
            <?php
            require_once("Database.php");
            $pokemon = isset($_POST["pokemon"]) ? $_POST["pokemon"] : "";
            $pokemon = strtolower($pokemon);
            $bdd = new DataBase();
            $consulta = $bdd->obtenerUnPokemon($pokemon);
            $arrLength = count($consulta);
            for ($i = 0; $i < $arrLength; $i++) {
                $numero = $consulta[$i]['numero'];
                $nombre = $consulta[$i]['nombre'];
                $urlTipo = './img/' . $consulta[$i]['tipo'] . '.jpg';
                $urlImg = "./img/" . $consulta[$i]['imagen'];
                $id = $consulta[$i]['id'];
                echo " <div class='row mt-5'>";
                echo " <div class='col-2 text-center'>
          <img class='imgPokemon' src=$urlImg>
          </div>";
                echo " <div class='col-2 text-center'>
          <img class='imgTipo' src=$urlTipo>
          </div>";
                echo " <div class='col-2 text-center'>
          <h3>$numero</h3>
          </div>";
                echo " <div class='col-2 text-center'>
          <a id='hrefNombre' href='pokemon.php?id=" . $numero . "'<h3>$nombre</h3></a>
          </div>";
                if ($_SESSION["session"] == "true") {
                    echo " <div class='col-2 text-center'>
          <a id='hrefModificacion' href='modificacion.php?id=" . $id . "&" . "tipo=" . $consulta[$i]['tipo'] . "&" . "numero=" . $numero . "&" . "nombre=" . $nombre . "' >Modificacion</a>
          </div>";
                    echo "
          <div class='col-2 text-center'>
          <a id='hrefBaja' href='eliminarPokemon.php?id_pokemon=" . $id . "' >Baja</a>
          </div>";
                }
                echo " </div>";
            }
            ?>
        </div>
        <div class="row">
            <?php
            if ($_SESSION["session"] == "true") {
                $variable = "<a id='botonCrear' href='nuevoPokemon.php'><button>Crear nuevo pokemon</button></a>";
                echo $variable;
            }
            ?>

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"/>
</html>