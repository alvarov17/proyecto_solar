<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Document</title>
</head>

<body>
 <header>
        <nav>
            <ul>
                <li>
                    <a class="active" href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="login.php">Ingresar</a>
                </li>
                <li>
                    <a href="#">Registrar</a>
                </li>
            </ul>
        </nav>
    </header>
    <form action="controller/registroController.php" method="POST">
        
     <input type="text" name="usu_nombre" placeholder="Nombre de usuario">
            
     <input type="text" name="usu_apellido" placeholder="Apellido del usuario">

     <input type="text" name="usu_correo" placeholder="Correo del usuario">
     
     <input type="text" name="usu_rut" placeholder="Ingrese rut">
     
     <input type="password" name="usu_clave" placeholder="Ingrese contraseña">
   
     <button type="submit">Registrar</button>
         
    </form>
    
    <article>
        <section>
 
        </section>
    </article>
    <footer></footer>
</body>

</html>