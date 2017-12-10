<?php 
    require 'connection.php';
    session_start();

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $id = $_SESSION['id'];

    $query = "INSERT INTO producto (prod_nombre,prod_stock,usuario_usu_id) VALUE ('$nombre','$cantidad',$id);";
    
    $con = $conexion->query($query);
    if($con == true){
        header ("location: ../home.php");
    }else{
        echo 'error:' . $con->error;
        echo $query;
        print_r($_SESSION);
    }
    
?>