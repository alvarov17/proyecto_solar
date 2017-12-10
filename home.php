<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <?php session_start();?>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="active" href="#">Bienvenido <?php echo $_SESSION['nombre']; ?></a>
                </li>
                <li>
                    <a href="controller/logout.php">Salir</a>
                </li>
                <li><a href="IngresoProd.php">Ingresar producto</a></li>
            </ul>
        </nav>
    </header>

    <article>
        <section><?php print_r($_SESSION)?></section>
    </article>
</body>
</html>