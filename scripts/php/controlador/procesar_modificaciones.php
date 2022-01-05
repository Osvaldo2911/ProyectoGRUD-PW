<?php
include('../modelo/empleado_dao.php');
$dao = new EmpleadoDAO(); 
$emp_no = $_POST['prop'];
$birth_date = $_POST["street"];
$first_name = $_POST["c"];
$last_name= $_POST["pc"];
$gender = $_POST['ty'];
$hire_date = $_POST['rn'];

$res = $dao->modificarEmp($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date);  

//var_dump($res = true); 
if($res =true){
header('location:../vista/Crud_empleados.php');
}else{
echo "MEJOR ME DEDICO A LAS REDES";
}
?>