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
    <title>Edad Exacta</title>
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
        <!-- faltaba el action y el method -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Selecione su fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1">
            </div>
            <!-- añado el sumbit -->
            <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
        </form>

        <?php

        const constante_18 = 18;
        define("constante0", "0");

        if (isset($_POST['verificar'])) {
            $fecha = new DateTime($_POST['fecha_nacimiento']);

            $date2 = new DateTime(date("y-m-d"));

            $fecha_actual = $fecha->diff($date2);

            $edad_actual = $fecha_actual->y;
            $edad_meses = $fecha_actual->m;
            $edad_dias = $fecha_actual->d;

            if ($edad_actual >= constante_18) {
                echo "<h4> Es mayor de edad ya que tiene " . $edad_actual . " años</h4> <br>";
            } else if ($edad_actual < constante_18 && $edad_actual > constante0) {
                echo "<h4> Es menor de edad ya que tiene " . $edad_actual . " años <h4>";
            } else {
                echo "<h4>No valido<h4>";
            }


            echo "<h5> Años: " . $edad_actual . " Meses: " . $edad_meses . " Días: " . $edad_dias . "</h5>";

        }

        ?>

    </div>
</body>

</html>