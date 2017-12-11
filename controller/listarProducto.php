<?php 
    require 'connection.php';
    
    $id = $_GET['id'];

    $query = "SELECT * FROM producto WHERE prod_id = $id";
    $res = $conexion->query($query);
    $reg = mysqli_fetch_array($res);

    
?>