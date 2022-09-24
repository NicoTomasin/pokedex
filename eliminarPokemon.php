<?php
require_once("Database.php");
$id = $_GET['id_pokemon'];
$conexion = new DataBase();
$conexion->eliminarPokemon($id);
header("location:indexAdmin.php");
exit();
