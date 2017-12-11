<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <?php session_start();?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a class="active" href="#">Bienvenido
                        <?php echo $_SESSION['nombre']; ?>
                    </a>
                </li>
                <li>
                    <a href="controller/logout.php">Salir</a>
                </li>
                <li>
                    <a href="IngresoProd.php">Ingresar producto</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>
        <?php print_r($_SESSION)?>
    </h1>
    <article>
        <section>
            <h1>Mis productos registrados</h1>
            <?php require 'controller/selectMisProductos.php'?>
        </section>
    </article>
</body>

</html>