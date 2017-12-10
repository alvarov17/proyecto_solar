<?php

require 'connection.php';
        
        $nombre = $_POST['usu_nombre'];
        $apellido = $_POST['usu_apellido'];
        $rut = $_POST['usu_rut'];
        $clave = $_POST['usu_clave'];
        $correo = $_POST['usu_correo'];
        
        $query = "INSERT INTO usuario (usu_nombre,usu_apellido,usu_rut,usu_clave,usu_correo) VALUES ('$nombre', '$apellido', '$rut', '$clave','$correo')";
        
        $con = $conexion->query($query);
        
        if($con == true){
            
            header ("location: ../index.php");
        }else{
            
            echo 'error:' . $con->error;
        }
        mysqli_close($conexion);
?>
