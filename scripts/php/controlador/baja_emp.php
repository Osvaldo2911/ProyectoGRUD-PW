<?php
include('../modelo/empleado_dao.php');
$dao = new EmpleadoDAO();

$emp_no =$_GET["emp_no"];

$res=$dao->eliminarEmp($emp_no);

header('location: ../vista/Crud_empleados.php');
?>