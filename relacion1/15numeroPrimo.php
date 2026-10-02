<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 15 - ¿Es primo?
  Descripción: Haz un programa php que te diga si un número entero y positivo es primo
               o no
 
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Tu número es primo?</title>
</head>

<body>
    <h1>¿El número es primo?</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $n = 97;
    $esPrimo = true;   // se supone primo hasta que se demuestre lo contrario

    echo "<p>Valor en la variable: $n</p>";

    if ($n < 2) {
        // 0, 1 y los negativos no son primos
        $esPrimo = false;
    } else {
        $raiz = sqrt($n);
        for ($i = 2; $i <= $raiz; $i++) {
            if ($n % $i == 0) {   // % devuelve el resto de la división
                $esPrimo = false;
                break;            // ya no hace falta seguir buscando
            }
        }
    }

    // El resultado se muestra una sola vez, al final
    if ($esPrimo) {
        echo "<p>$n es primo</p>";
    } else {
        echo "<p>$n no es primo</p>";
    }
    ?>
</body>

</html>