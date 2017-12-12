<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
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
        <section>
        <h1>Buscar Productos</h1>
            <a href="buscarProducto.php?tipo=Funda">Fundas</a><br>
            <a href="buscarProducto.php?tipo=ManosLibres">Manos Libres</a><br>
            <a href="buscarProducto.php?tipo=Mica">Micas</a><br>
            <a href="buscarProducto.php?tipo=BateriaExterna">Baterias Externas</a><br>
            <a href="buscarProducto.php?tipo=TarjetadeMemoria">Tarjetas de Memoria</a><br>
            <a href="buscarProducto.php?tipo=SelfieStick">Selfie Stick</a><br>
        </section>
    </article>
</body>

</html>