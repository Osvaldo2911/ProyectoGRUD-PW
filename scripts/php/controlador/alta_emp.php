<?php
include('../modelo/empleado_dao.php');
$dao = new EmpleadoDAO();

$birth_date=$_POST["txtFecha"];
$first_name=$_POST["txtNombre"];
$last_name=$_POST["txtAP"];
$gender=$_POST["typo"];
$hire_date=$_POST["txtLaboralFecha"];

$res=$dao->agregarEmp($birth_date, $first_name, $last_name, $gender, $hire_date);

if($res){
    header('location: ../vista/Crud_empleados.php');
    echo "<script> alert('Se agrego el empleado'); </script>";
}else{
    echo "<script> alert('No se agrego el empleado'); </script>";
}
?>