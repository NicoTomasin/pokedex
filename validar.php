<?php

require_once("Database.php");
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];

$conexion = new DataBase();

$respuesta= $conexion->query("select * from usuario");

foreach ($respuesta as $respuestas){
    echo "id: " . $respuestas["id"] . "<br>";
    echo "usuario: " . $respuestas["email"] . "<br>";
    echo "password: " . $respuestas["password"] . "<br>";
}

/*if ($usuario == "aa" && $pass == "123"){
    session_start();
    $_SESSION["session"] = true;
    header("location:landing.php");
    exit();
}else{
    session_destroy();
    header("location:index.php");
    exit();
}*/
