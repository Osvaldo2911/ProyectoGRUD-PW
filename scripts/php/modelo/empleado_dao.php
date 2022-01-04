<?php

include('../conexionbd/conexionbd_empleados.php');

class EmpleadoDAO{
    private $conexion;
    public function __construct(){
        $this->conexion=new ConexionBDEmpresa();
    }

    public function agregarEmp($emp_no, $birth_date, $first_name,$last_name, $gender, $hire_date){
        
        $sql = "INSERT INTO Empleados values ('$emp_no','$birth_date','$first_name','$last_name','$gender','$hire_date')";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
        
    }

    public function eliminarEmp($emp_no){
        
        $sql = "DELETE FROM Empleados WHERE emp_no = '$emp_no'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
        
    }
}

?>