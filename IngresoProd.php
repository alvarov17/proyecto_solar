<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
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
                <label for="titulo">Titulo</label><br>
                <input type="text" name="titulo"><br>
                <label for="cantidad">Cantidad</label><br>
                <input type="number" name="cantidad" min="1" max="1000"><br>
                <label for="precio">Precio</label><br>
                <input type="text" name="precio"><br>
                <label for="tipo">Tipo</label><br>
                <select name="accesorio">
                    <option value="Funda">Fundas</option>
                    <option value="ManosLibres">Manos Libres</option>
                    <option value="Mica">Micas</option>
                    <option value="BateriaExterna">Baterias Externas</option>
                    <option value="TarjetadeMemoria">Tarjetas de Memoria</option>
                    <option value="SelfieStick">Selfie Stick</option>
                </select><br>
                <label for="desc">Descripcion</label><br>
                <textarea name="desc" cols="30" rows="10"></textarea>
                <input type="submit" value="Ingresar">
            </form>
        </article>
    </section>
    <?php ?>
</body>

</html>