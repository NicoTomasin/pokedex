<?php
require_once("Database.php");
$usuario = isset( $_POST["usuario"])?$_POST["usuario"] : "";
$pass = isset( $_POST["pass"])?$_POST["pass"] : "";

$conexion = new DataBase();
if ($conexion->validarUsuario($usuario, $pass)) {
    session_start();
    $_SESSION["session"] = true;
    header("location:indexAdmin.php");
    exit();
} else {
    session_destroy();
    header("location:index.php");
    exit();
}