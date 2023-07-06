<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <title>Mayor o menor de edad</title>
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
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Edad</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite su edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Operar</button>
        </form>

        <?php

        $edad = 0;
        const constante_18 = 18;

        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];

            if ($edad >= constante_18) {
                echo "<h3>Es mayor de edad</h3>";
            } else if (18 > $edad && 0 < $edad) {
                echo "<h3>Es menor de edad</h3>";
            } else {
                echo "<h3>No valido</h3>";
            }

        }

        ?>

    </div>
</body>

</html>