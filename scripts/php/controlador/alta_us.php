<?php

session_start();
include('../modelo/usuario_dao.php');
$usdao = new UsuarioDAO();
$Nombre=$_POST["nombrefull"];
$Usuario=$_POST["userName"];
$Contrasena=$_POST["contra"];

$res = $usdao->agregarUs($Nombre, $Usuario, sha1($Contrasena));
     if ($res) {
          echo "<script type='text/javascript'>alert('Registro agregado Correctamente');  
          window.location.href='../vista/login.php'</script>";
    } else {
        echo "<script type='text/javascript'>alert('NO SE REGISTRÓ SU USUARIO');  
          window.location.href='../vista/login.php'</script>";
    }



?>