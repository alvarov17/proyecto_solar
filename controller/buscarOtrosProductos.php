<?php 

    require 'connection.php';
    session_start();

    $id = $_SESSION['id'];
    $tipo = $_GET['tipo'];

    $query = "SELECT * FROM producto WHERE prod_tipo = '$tipo' AND usuario_usu_id != $id";
    if($result = mysqli_query($conexion,$query)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo '<a href=producto.php?id='.$row['prod_id'].'>' . $row['prod_titulo'] . "</a>";
            }
        }
    }

?>