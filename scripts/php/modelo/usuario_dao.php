<?php

include('../conexionbd/conexionbd_empleados.php');

class UsuarioDAO{
    private $conexion;
    public function __construct(){
        $this->conexion=new ConexionBDEmpresa();
    }
    
    public function agregarUs($Nombre, $Usuario, $Contrasena){
        
        $sql = "INSERT INTO Usuarios values ('$Nombre','$Usuario','$Contrasena')";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
        
    }
}

?>