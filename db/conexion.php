<?php
    // se agrega el "$" a la variable
    $host = 'localhost';
    $usuario = 'root';
    // se elimina la contraseña
    $contraseña = '';
    $basedatos = 'mi_proyecto';
    // se añade la variable contraseña a conexion
    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }

?>