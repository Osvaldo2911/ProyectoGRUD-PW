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

    public function modificarEmp($emp_no, $birth_date, $first_name,$last_name, $gender, $hire_date){
        
        $sql = "UPDATE Empleados SET birth_date = '$birth_date',first_name = '$first_name',last_name = '$last_name',gender ='$gender',hire_date='$hire_date' WHERE emp_no = '$emp_no'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
        
    }

    //Select * from Empleados where emp_no LIKE '%" + $emp_no + "%' AND birth_date LIKE '%" + $birth_date + "%' AND first_name LIKE '%" + sa + "%' AND last_name LIKE '%" + te + "%' AND gender LIKE '%" + ti + "%' AND hire_date LIKE '%" + re + "%';";

    public function Emp($emp_no, $birth_date, $first_name,$last_name, $gender, $hire_date){
        
        $sql = "UPDATE Empleados SET birth_date = '$birth_date',first_name = '$first_name',last_name = '$last_name',gender ='$gender',hire_date='$hire_date' WHERE emp_no = '$emp_no'";
        $res = mysqli_query($this->conexion->getConexion(), $sql);
        return $res;
        
    }

}

?>