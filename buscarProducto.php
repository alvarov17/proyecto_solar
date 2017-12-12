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
    <nav>
        <ul>
            <li>
                <a href="home.php">Bienvenido
                    <?php echo $_SESSION['nombre']; ?>
                </a>
            </li>
            <li>
                <a href="controller/logout.php">Salir</a>
            </li>
            <li>
                <a class="active" href="IngresoProd.php">Ingresar producto</a>
            </li>
        </ul>
    </nav>
    
    

</body>

</html>