<?php 

    require 'connection.php';

    $query = "SELECT * from comentario WHERE producto_prod_id = " . $_GET['id'];
    
        if($result = mysqli_query($conexion,$query)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<p>" . $row['com_desc'] . "</p>";
                }
            }
        }

?>