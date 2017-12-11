<?php 
    require 'connection.php';
    session_start();

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id = $_SESSION['id'];
    $dt = new DateTime("now",new DateTimeZone("America/Santiago"));
    $desc = $_POST['desc'];
    $date = $dt->format('Y-m-d H:i:s');

    $query = "INSERT INTO producto (prod_nombre,prod_stock,prod_precio,prod_fecha,prod_desc,usuario_usu_id) VALUE ('$nombre','$cantidad','$precio','$date','$desc',$id);";
    
    $con = $conexion->query($query);
    if($con == true){
        header ("location: ../home.php");
    }else{
        echo 'error:' . $con->error;
        echo $query;
        print_r($_SESSION);
    }
    
?>