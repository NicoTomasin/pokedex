<?php
echo "<form action='validar.php' method='post' enctype='multipart/form-data' >
<label for='usuario'>Usuario:</label>
<input type='text' name='usuario'>
<label for='pass'>Contraseña:</label>
<input type='password' name='pass'>
<input type='submit'>
</form>";

$conexion = new mysqli(
    $host="localhost",
    $user="root",
    $pass="",
    $db="pokemon"
);
$sql= "select * from usuario";
$respuesta= mysqli_query($conexion,$sql);
$cant=mysqli_num_rows($respuesta);

for($i=0;i<$cant;$i++)
{
$fila=mysqli_fetch_assoc($respuesta);
echo"id".$respuesta["id"];
}


