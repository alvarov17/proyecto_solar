<?php 

    require 'connection.php';
    session_start();

    $comentario = $_POST['comentario'];
    $id = $_POST['id'];

    $query = "INSERT INTO comentario (usuario_usu_id,producto_prod_id,com_desc) VALUE (".$_SESSION['id'] .",". $id .",'". $comentario . "')";

    $con = $conexion->query($query);
    if($con == true){
        header ("location: ../producto.php?id=" . $id);
    }else{
        echo 'error:' . $con->error;
        echo $query;
        echo "get : " . $id;
    }
?>