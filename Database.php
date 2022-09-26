<?php
class DataBase{
    private $conexion;
    public function __construct()
    {
        $config = parse_ini_file("config.ini");
    $this->conexion = new mysqli($config['host'],
                                $config['user'],
                                $config['pass'],
                                $config['db']);
    }
    public function query($sql){
        $respuesta =  $this->conexion->query($sql);
        if($respuesta){
            return $respuesta->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }

    }
    public function __destruct (){
        $this->conexion->close();
    }
    public function execute($sql){
        $this->conexion->query($sql);
    }
    public function validarUsuario($email,$pass){
        return $this->query("select * from usuario where email ='".$email . "' and password = '".$pass."'");
    }
    public function crearUsuario($email,$pass){
        return $this->execute("INSERT INTO usuario(`email`, `password`) VALUES ('".$email ."','".$pass."')");
    }
    public function obtenerTodosLosPokemones(){
        return $this->query("SELECT * FROM `pokemones` WHERE 1");
    }
    public function eliminarPokemon($id){
        return $this->execute("DELETE FROM pokemones where ".$id." = id");
    }
    public function obtenerUnPokemon($nombre){
        $query = $this->query("SELECT * FROM pokemones where '". $nombre ."' = `nombre`");
        if($query){
            return $query;
        }else{
            return $this->obtenerTodosLosPokemones();
        }

    }
    public function darAltaPokemon($numero,$tipo,$nombre,$descripcion,$imagen){
        return $this->execute("INSERT INTO pokemones ( numero , tipo, nombre, descripcion, imagen) VALUES ('".$numero."','".$tipo."','".$nombre."','".$descripcion."','".$imagen."')");
    }
}