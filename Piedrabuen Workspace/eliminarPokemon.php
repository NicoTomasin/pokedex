<?php
require_once("Database.php");
$id = $_GET['id_pokemon'];
function eliminarPokemon($id){
    $sql = 'delete from pokemones where id = id_pokemon';
    $this->conexion->query($sql);
    header("location indexAdmin.php");
    exit();

}

?>