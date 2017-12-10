<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <?php session_start()?>
</head>

<body>
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
            <a class="active" href="#">Ingresar producto</a>
        </li>
    </ul>
    <section>
        <article>
            <form action="controller/registrarProducto.php" method="POST">
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre"><br>
                <label for="cantidad">Cantidad</label><br>
                <input type="text" name="cantidad"><br>
                <input type="submit" value="Ingresar">
            </form>
        </article>
    </section>
    <?php ?>
</body>

</html>