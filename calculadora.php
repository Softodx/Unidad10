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
    <!-- faltaba el enlace de css -->
    <link rel="stylesheet" href="css/general.css">
    <!--CDN BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Calculadora</title>
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
                <label for="Input1">Número 1:</label>
                <input type="number" name="n1" class="form-control" id="Input1" placeholder="Digite Número 1" required>
            </div>
            <div class="form-group">
                <label for="Input2">Número 2:</label>
                <!-- faltaba el name  -->
                <input type="number" name="n2" class="form-control" id="Input2" placeholder="Digite número 2" required>
            </div>
            <div class="form-group">
                <label for="Select1">Seleccione la operación:</label>
                <select class="form-control" name="tipo" id="Select1">
                    <option value="1">Suma</option>
                    <!-- faltaba el value  -->
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                </select>
            </div>
            <button type="submit" name="operar" class="btn btn-outline-info">Resultado</button>
        </form>

        <?php


        $n1 = $n2 = $tipo = $result = 0;

        if (isset($_POST['operar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $tipo = $_POST['tipo'];

            switch ($tipo) {
                case '1':
                    $result = $n1 + $n2;
                    break;
                case '2':
                    $result = $n1 - $n2;
                    break;
                case '3':
                    $result = $n1 * $n2;
                    break;
                case '4':
                    // aca uso un if para el caso de divirdir entre 0
                    if ($n2 != 0) {
                        $result = $n1 / $n2;
                    } else {
                        echo "<h3> No se puede dividir entre 0 </h3>";
                        exit;
                    }
            }

            echo "<h3>" . $result . "</h3>";
        }
        ?>

</body>

</html>