
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
        if($_SESSION["session"]=="true"){
            echo"<div class='col-4 text-center'>
                <h3>Acciones</h3>
                </div>";
        }
        ?>
    </div>
    <div id="fondo" class="row">
        <?php
        require_once("Database.php");
        $bdd = new DataBase();
        $consulta = $bdd->obtenerTodosLosPokemones();
        $arrLength = count($consulta);
        for ($i=0;$i<$arrLength; $i++){
            $numero = $consulta[$i]['numero'];
            $nombre = $consulta[$i]['nombre'];
            $urlTipo = './img/'.$consulta[$i]['tipo'] . '.jpg';
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
                    if($_SESSION["session"]=="true"){
                        echo" <div class='col-2 text-center'>
          <a id='hrefModificacion' href='modificacion.php?id=" . $id . "&" . "tipo=" . $consulta[$i]['tipo'] . "&" . "numero=" . $numero . "&" . "nombre=" . $nombre . "' >Modificacion</a>
          </div>";
                        echo"
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
        if($_SESSION["session"]=="true") {
            $variable = "<a id='botonCrear' href='nuevoPokemon.php'><button>Crear nuevo pokemon</button></a>";
            echo $variable;
        }
        ?>

    </div>