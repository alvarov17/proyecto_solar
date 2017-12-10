<?php
require 'connection.php';

      $correo = $_POST['usu_correo'];
      $password = $_POST['usu_clave'];
        
      $query = "SELECT * FROM usuario where usu_correo='$correo' and usu_clave='$password'";
        
        $res = $conexion->query($query);
        $reg = mysqli_fetch_array($res);
        
    if($reg == true)
    {
        session_start();
        
         $_SESSION['nombre'] = $reg['usu_nombre'];
         $_SESSION['id'] = $reg['usu_id'];
        header ("location: ../home.php");
    } else {
        echo "no existe en mi bd";
    }
        
