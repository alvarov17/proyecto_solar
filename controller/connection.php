<?php

            //$con = mysqli_connect('localhost','root','','conexionphp');
            $conexion = new mysqli('localhost', 'root' ,'' ,'PaginaCompras');
            if($conexion == true){
                               
                //echo 'conectaste correctamente.<br>';
                      
            }else{
                
                echo 'no conectaste <br>' . mysqli_error();

            }       
            return $conexion;

           
?>