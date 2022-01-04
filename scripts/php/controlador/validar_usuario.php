<?php
include('../conexionbd/conexionbd_empleados.php');
$con = new ConexionBDEmpresa();
$conexion = $con->getConexion();
    if ($conexion) {
        if (
            isset($_POST['correologin']) && isset($_POST['contralogin'])
            && !empty($_POST['correologin']) && !empty($_POST['contralogin'])){
            $u = $_POST['correologin'];
            $p = $_POST['contralogin'];
            //$u_cifrado = sha1($u); 
            $p_cifrado = sha1($p);
            $sql = "SELECT * FROM Usuarios where Usuario ='$u' AND Contrasena ='$p_cifrado'";
            $res = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($res) == 1) {
                session_start();
                $_SESSION['usuario'] = $u;
                $_SESSION['u_valido'] = true;
                header('location: ../vista/Crud_inicio.php');
            } else {
                echo "<script type='text/javascript'>
                alert('Correo Electronico NO REGISTRADO');
                window.location.href='../vista/login.php';
                </script>";
            }
            //echo "entrando al if";      
        } else {
            include("../vista/login.php");
            //echo "<p> INTRODUZCA LOS CAMPOS </p>";
        }
    } else {
        echo "SIN CONEXION";
    }
?>