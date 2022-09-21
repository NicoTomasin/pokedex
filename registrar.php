<?php
require_once("Database.php");
$email = $_POST["email"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];


$conexion = new DataBase();

if($pass == $pass2){
    $conexion->crearUsuario($email,$pass);
    header("location:login.php");
    exit();
}else{
    session_destroy();
    header("location:registro.php");
    exit();
}
