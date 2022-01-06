<?php
include('../modelo/empleado_dao.php');
$dao = new EmpleadoDAO();

$emp_no=$_POST["txtEmp_no"];
$salary=$_POST["txtSalario"];
$from_date=$_POST["txtFechaIn"];
$to_date=$_POST["txtFechaFi"];

$res=$dao->agregarSal($emp_no, $salary, $from_date, $to_date);

if($res){
    header('location: ../vista/Crud_salario.php');
    echo "<script> alert('Se agrego el salario'); </script>";
}else{
    echo "<script> alert('No se agrego el salario'); </script>";
}
?>