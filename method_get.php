<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- enlace el icono, scrips y una web de iconos -->
    <link rel="shorcut icon" href="img/logo.png">
    <script defer src="scripts/script.js"></script>
    <script src="https://kit.fontawesome.com/1a923bd3c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/general.css">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <title>Method get</title>
</head>

<body>
    <!-- añadi un menu hamburguesa hecho nativamente -->
    <header class="menu-despegable">
        <h1 class="h1-menu">
            <a href="index.html" class="a-menu link-color-blanco">Unidad 10</a>
        </h1>

        <i class="button-menu fa-solid fa-bars">
        </i>

        <nav class="nav-menu">
            <ul class="ul-menu">
                <li class="li-menu"><a href="index.html" class="a-menu-desplegado link-color-blanco"><span>Inicio</span></a></li>
                <li class="li-menu"><a href="calculadora.php" class="a-menu-desplegado link-color-blanco"><span>Calculadora</span></a></li>
                <li class="li-menu"><a href="mayor_menor.php" class="a-menu-desplegado link-color-blanco"><span>Edad</span></a></li>
                <li class="li-menu"><a href="method_get.php" class="a-menu-desplegado link-color-blanco"><span>Metodo get</span></a></li>
                <li class="li-menu"><a href="edad_exacta.php" class="a-menu-desplegado link-color-blanco"><span>Edad exacta</span></a></li>
            </ul>
        </nav>
    </header>
    <div class="main-frame-cal">
        <!-- corregi el post a get -->
        <form action="" method="get">
            <div class="form-group">
                <label for="Input1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="Input1" placeholder="Digite su Nombre">
            </div>
            <div class="form-group">
                <label for="Input1">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="Input1" placeholder="Digite su Apellido">
            </div>
            <div class="form-group">
                <label for="Input1">Cédula</label>
                <input type="text" name="cc" class="form-control" id="Input1" placeholder="Digite su Cédula">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
        </form>


        <?php


        if (isset($_GET['verificar'])) {
            $nombre = $_GET['nombre'];
            // corregi el post a get
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cc'];

            echo "Nombre : " . $nombre . "<br>";
            echo "Apellido : " . $apellido . "<br>";
            echo "Cédula : " . $cedula . "<br>";

        }

        ?>

    </div>
</body>

</html>