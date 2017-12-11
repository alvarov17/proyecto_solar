<?php 

    require 'connection.php';

    $query = "SELECT * from producto WHERE usuario_usu_id = " . $_SESSION['id'];

    if($result = mysqli_query($conexion,$query)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<a href=producto.php?id=" . $row['prod_id'] . ">" . $row['prod_nombre'] . "</a>";
            }
        }
    }


?>