<?php
include_once "conexion.php";

class Persona
{
    public function obtenerPersonas()
    {
        $con = Conexion::conectar();
        $sql = "SELECT * FROM personas";
        $query = $con->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        echo json_encode($result);
    }

    public function agregarPersona()
    {
        $con = Conexion::conectar();
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $estado = "activo";
        $edad = $_POST['edad'];
        $consulta = "INSERT INTO personas (cedula,nombre,apellido,edad,estado)values('$cedula','$nombre','$apellido','$edad','$estado')";
        $resultado = $con->prepare($consulta);
        $resultado->execute();
        $dato = "Se inserto correctamente";
        echo json_encode($dato);

    }
}
?>