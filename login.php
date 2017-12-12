<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/login.css">
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
                    <a href="#">Ingresar</a>
                </li>
                <li>
                    <a href="registro.php">Registrar</a>
                </li>
            </ul>
        </nav>
    </header>
    <form action="controller/loginController.php" method="POST">
        <input type="text" name="usu_correo" placeholder="Correo">
        <br>
        <input type="password" name="usu_clave" placeholder="Contraseña">
        <br>
        <button type="submit">Ingresar</button>

    </form>

    <article>
        <section>

        </section>
    </article>
    <footer></footer>
</body>

</html>