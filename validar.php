<?php

require_once("Database.php");
$email = $_POST["email"];
$pass = $_POST["pass"];

$conexion = new DataBase();
if ($conexion->validarUsuario($email,$pass)){
    session_start();
    $_SESSION["session"] = true;
    header("location:landing.php");
    exit();
}else{
    session_destroy();
    header("location:index.php");
    exit();
}
