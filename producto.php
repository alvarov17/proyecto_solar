<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <?php require 'controller/listarProducto.php' ?>
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
    <article>
        <section>
            <?php echo "<h1>" . $reg['prod_nombre'] . "</h1>"; ?>
            <?php echo "<p>" . $reg['prod_desc'] . "<p>"; ?>
            <?php echo "<p>" ."Stock : " . $reg['prod_stock'] . "<p>"; ?>
            <?php echo "<p>" ."Fecha publicacion : ". $reg['prod_fecha'] . "<p>"; ?>
            <h2>Comentarios</h2>
            <?php require "controller/mostrarComentarios.php"?>
            <form action="controller/registroComentario.php" method="post">
                <textarea name="comentario" cols="30" rows="10"></textarea><br>
                <input type="hidden" name="id" value=<?php echo '"' . $_GET['id'] . '"'; ?>>
                <input type="submit" value="Enviar">
            </form>
        </section>
    </article>
</body>

</html>