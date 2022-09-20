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
        return $respuesta->fetch_all(MYSQLI_ASSOC);
    }
    public function __destruct (){
        $this->conexion->close();
    }
    public function execute($sql){
        $this->conexion->query($sql);
    }
}