<?php 

    require 'connection.php';

    $query = "select com_fecha,com_desc,usu_nombre,usu_apellido from comentario inner join usuario on comentario.usuario_usu_id = usuario.usu_id where comentario.producto_prod_id = " . $_GET['id'];
    
        if($result = mysqli_query($conexion,$query)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<p>" . $row['com_desc'] . " por ". $row['usu_nombre'] ." a las : ".$row['com_fecha']. "</p>";
                }
            }
        }

?>