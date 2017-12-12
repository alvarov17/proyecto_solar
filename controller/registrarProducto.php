<?php 
    require 'connection.php';
    session_start();

    $nombre = $_POST['titulo'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id = $_SESSION['id'];
    $accesorio = $_POST['accesorio'];
    $dt = new DateTime("now",new DateTimeZone("America/Santiago"));
    $desc = $_POST['desc'];
    $date = $dt->format('Y-m-d H:i:s');

    $query = "INSERT INTO producto (prod_titulo,prod_stock,prod_precio,prod_fecha,prod_desc,prod_tipo,usuario_usu_id) VALUE ('$nombre','$cantidad','$precio','$date','$desc','$accesorio',$id);";
    
    $con = $conexion->query($query);
    if($con == true){
        header ("location: ../home.php");
    }else{
        echo 'error:' . $con->error;
        echo $query;
        print_r($_SESSION);
    }
    
?>