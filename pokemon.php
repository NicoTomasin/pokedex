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
        <div id="fondo">
            <div class="row">
                <div class="col-1">
                    <a href="index.php"><img class="logo" src="img/logo.png"></a>
                </div>
                <div class="col-5 text-center">
                    <img src="img/pokemon.png" height="80">
                </div>
                <div class="col-6">
                    <form action='login.php' method='post'>
                        <input name='usuario' type='text' placeholder='Usuario'>
                        <input name='pass' type='password' placeholder='Contraseña'>
                        <button id='login' type='submit'>Ingresar</button>
                    </form>
                </div>
            </div>
            <?php
            require_once "./Componentes/buscador.php"
            ?>
        </div>
        <div class="d-flex" id="fondo">
            <?php
            require_once("Database.php");
            $pokemon = isset($_GET["id"]) ? $_GET["id"] : "";
            $pokemon = strtolower($pokemon);
            $bdd = new DataBase();
            $consulta = $bdd->obtenerUnPokemon($pokemon);
            $urlTipo = './img/'.$consulta[$i]['tipo'] . '.jpg';
            $arrLength = count($consulta);
            for ($i = 0; $i < $arrLength; $i++) {
                $numero = $consulta[$i]['numero'];
                $nombre = $consulta[$i]['nombre'];
                $urlTipo = './img/' . $consulta[$i]['tipo'] . '.jpg';
                $urlImg = "./img/" . $consulta[$i]['imagen'];
                $id = $consulta[$i]['id'];
                $desc = $consulta[$i]['descripcion'];
                $nombre = $consulta[$i]['nombre'];
                $tipo = $consulta[$i]['tipo'];
                echo "<div class='p-3 '> <img class='imgPokemon' src=$urlImg    style='margin-top: 1px;'  ></div>";
                echo " <div class='p-3 '><h2 style='margin-top: 45px;'>$nombre</h2><br><h3cd o   style='margin-top: -30px;'>num: $numero</h3cd></div>
                       
                      <div class='p-2 '><img src='$urlTipo' alt='' style='width: 70px;margin-top: 45px;'></div> 
                        <div class='p-4  flex-grow-1'>$desc</div>
                      ";

            }
            ?>

}
        </div>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"/>
    </html>
<?php
