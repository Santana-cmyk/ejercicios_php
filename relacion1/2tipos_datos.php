<!--
/*
 * Nombre: Daniel Santana Bueno
 * Curso: 2ºDAW
 * Ejercicio: 2 - Tipos de datos
 * Descripción: Haz un programa PHP que muestre un valor de ejemplo de cada tipo de
                dato escalar en php con echo utilizando la función var_dump(), y también
                con printf formateado.
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>

<body>
    <?php
    // Variables de distintos tipos
    $a = true;      // booleano (bool)
    $b = 3;         // entero (int)
    $c = 7.5;       // decimal (float)
    $d = "Dani";    // cadena de texto (string)

    // var_dump muestra el tipo y el valor de cada variable
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    ?>
    <br><br>
    <?php

    // printf muestra texto con formato. Cada % indica cómo se escribe el valor
    printf("Tipo booleano: %b <br>", $a);
    printf("Tipo entero: %u <br>", $b);
    printf("Tipo decimal: %f <br>", $c);
    printf("Tipo cadena: %s <br>", $d);
    ?>
</body>

</html>