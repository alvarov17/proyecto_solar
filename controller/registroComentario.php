<?php 

    require 'connection.php';
    session_start();

    $dt = new DateTime("now",new DateTimeZone("America/Santiago"));
    $date = $dt->format('Y-m-d H:i:s');

    $comentario = $_POST['comentario'];
    $id = $_POST['id'];

    $query = "INSERT INTO comentario (usuario_usu_id,producto_prod_id,com_desc,com_fecha) VALUE (".$_SESSION['id'] .",". $id .",'". $comentario . "','" . $date ."')";

    $con = $conexion->query($query);
    if($con == true){
        header ("location: ../producto.php?id=" . $id);
    }else{
        echo 'error:' . $con->error;
        echo $query;
        echo "get : " . $id;
    }
?>