<?php
class ConexionBDEmpresa{
    private $conexion;
    private $host = 'localhost:3306';
    private $usuario = 'progra44_osvaldo29';
    private $contra = 'Osvaldo29.'; //MySQL
    private $bd = 'progra44_Empresa';

    public function __construct(){
        $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contra, $this->bd);
        if(!$this->conexion)
            die("Error en conexion con MySQL" . mysqli_connect_error() . mysqli_connect_errno() );
        else
            echo "";
    }
    // singlenton
    public function getConexion(){
        return $this->conexion;
        if(!isset(self::$conexion)){
            self::$conexion = new self; 
        }
        return self::$conexion;
    }
}
?>