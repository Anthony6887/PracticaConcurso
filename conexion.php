<?php
class Conexion
{
    private function __construct(){

    }
    public static function conectar()
    {
        $servidor = "99.000webhost.io";
        $usuario = "admin";
        $password = "Ad.12345";
        $bd = "id20895153_base";

        $conexion = new PDO ("mysql:host=$servidor;dbname=$bd", $usuario, $password);
        return $conexion;
    }


   
}

Conexion::conectar();
?>

