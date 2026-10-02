<!-- Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 13 - Factorial
  Descripción: Haz un script PHP que calcule el factorial de un número natural (entero y
               positivo). Haz que se muestren los cálculos que se van haciendo
-->


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial en PHP</title>
</head>

<body>
    <h1>Cálculo del factorial de un número con PHP</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $n = 10;

    if ($n >= 0) {
        echo "<h3>Factorial de $n</h3>";

        $factorial = 1;   // se empieza en 1 porque es el elemento neutro del producto

        // Se multiplica 1 · 2 · 3 · ... · n acumulando el resultado
        for ($i = 1; $i <= $n; $i++) {
            $factorial = $factorial * $i;
            echo "<p>Paso $i: resultado parcial = $factorial</p>";
        }

        echo "<p><b>$n! = $factorial</b></p>";
    } else {
        echo "<p>El número no puede ser negativo.</p>";
    }
    ?>
</body>

</html>