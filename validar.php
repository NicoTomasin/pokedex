<?php


$usuario = $_POST["usuario"];
$pass = $_POST["pass"];


if ($usuario == "aa" && $pass == "123"){
    session_start();
    $_SESSION["session"] = true;
    header("location:landing.php");
    exit();
}else{
    session_destroy();
    header("location:index.php");
    exit();
}
