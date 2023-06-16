<?php
class Conexion
{
    private function __construct(){

    }
    public static function conectar()
    {
        $servidor = "localhost";
        $usuario = "id20919424_admin";
        $password = "q%BANN4p(N)(H#>F";
        $bd = "id20919424_base";

        $conexion = new PDO ("mysql:host=$servidor;dbname=$bd", $usuario, $password);
        return $conexion;
    }


   
}

Conexion::conectar();
?>

