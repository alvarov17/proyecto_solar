<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="active" href="#home">Home</a>
                </li>
                <li>
                    <a href="#">Registrate</a>
                </li>
                <li>
                    <a href="#">Ingresa</a>
                </li>
                <li>
                    <input type="text" id="search">
                </li>
                <!-- <li><a href="#about">About</a></li> -->
            </ul>
        </nav>
    </header>
    <form action="controller/loginController.php" method="POST">
     <input type="text" name="usu_nombre" placeholder="Correo">
            
     <input type="password" name="usu_clave" placeholder="Contraseña">
   
     <button type="submit">Ingresar</button>
         
    </form>
    
    <article>
        <section>
 
        </section>
    </article>
    <footer></footer>
</body>

</html>