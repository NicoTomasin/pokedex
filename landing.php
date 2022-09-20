<?php

session_start();
if(isset($_SESSION["session"])&& $_SESSION["session"]==true)
{
echo "<a href= 'cerrarsession.php'> cerrar session</a>";
}else
{

    header("location: index.php");
    exit();
}
