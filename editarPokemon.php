<?php


if (isset($_POST['subir'])) {
    $archivo = $_FILES['archivo']['name'];
    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $temp = $_FILES['archivo']['tmp_name'];

        //Validacion de tipo de archivo
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpg") || strpos($tipo, "jpeg") || strpos($tipo, "png")))) {
            echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>';
        } else {
            //Si la imagen es correcta la intento subir al servidor
            if (move_uploaded_file($temp, $archivo)) {
                chmod($archivo, 0777);
            } else {
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
        }
    }
}

include_once("Database.php");
$numero = isset($_POST["numero_id"]) ? $_POST["numero_id"] : "";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
$imagen = isset($_FILES["archivo"]["name"]) ? $_FILES["archivo"]["name"] : "";

$conexion = new DataBase();
//genero la consulta y la ejecuto
if (!($conexion->editarPokemon($numero, $tipo, $nombre, $descripcion, $imagen))) {
    header('Location: indexAdmin.php');
    exit();
} else {
    header('Location: indexAdmin.php');
    exit();
}


