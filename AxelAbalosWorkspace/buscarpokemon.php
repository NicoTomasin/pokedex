

<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/mostrarpokemon.css">

</head>
<body>


<header>

    <br>



<?php
require_once "../Database.php";


$ruta= "imagenes/";
$extencion=".jpg";
$conexion = new DataBase();
$pokemonbuscado=$_POST["pokemon"];
$consulta= "select * from pokemones";
$resultados= $conexion->query($consulta);

foreach ($resultados as $resultado)
{
    if ($pokemonbuscado==$resultado["nombre"])
    {echo "<div class='pokemon'>";
        echo"<h1>";
        echo $resultado["nombre"]." id".$resultado["numero"];
        echo"</h1>";
        echo"<br>";
        echo "</div>";
        $rutacompleta=$ruta.$resultado['imagen'];

        echo "<div class='imagenpokemon'>"; echo "<img class='poke' src='$rutacompleta'>"; echo "</div>";

echo "<div class='divdeltipo'>";
        echo "<br>";
$imgn=$ruta.$resultado["tipo"].$extencion;
echo "<img class='imagentipo' src='$imgn'>";
echo "</div>";

        echo "<div class='descripcion'>";
        echo"<br>";
        echo $resultado["descripcion"];

        echo "</div>";

    }
    else

        if ($pokemonbuscado==$resultado["numero"])
        { echo "<div class='pokemon'>";
        echo"<h1>";
            echo $resultado["nombre"]." id ".$resultado["numero"];
            echo"</h1>";
            echo"<br>";
            echo "</div>";
            $rutacompleta=$ruta.$resultado['imagen'];

            echo "<div class='imagenpokemon'>"; echo "<img class='poke' src='$rutacompleta'>"; echo "</div>";

            echo "<div class='divdeltipo'>";
            echo "<br>";
            $imgn=$ruta.$resultado["tipo"].$extencion;
            echo "<img class='imagentipo' src='$imgn'>";
            echo "</div>";

            echo "<div class='descripcion'>";
            echo"<br>";
            echo $resultado["descripcion"];

            echo "</div>";
        }

}
?>


</body>

</html>

