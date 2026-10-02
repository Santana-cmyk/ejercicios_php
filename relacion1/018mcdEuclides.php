<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 18 - Máximo común divisor (MCD) con Euclides
  Descripción: Haz un programa en PHP que calcule el máximo común divisor de dos
                números naturales utilizando el algoritmo de Euclides
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCD con Euclides</title>
</head>

<body>
    <h1>MCD con Euclides</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $a = 48;
    $b = 18;

    echo "<p>Valor de a: $a</p>";
    echo "<p>Valor de b: $b</p>";

    // Se trabaja con copias para no perder los valores originales
    $x = $a;
    $y = $b;

    while ($y != 0) {
        $resto = $x % $y;   // resto de la división
        $x = $y;            // el divisor pasa a ser el dividendo
        $y = $resto;        // el resto pasa a ser el divisor
    }

    // Al terminar, $x contiene el MCD
    echo "<p>El MCD de $a y $b es: $x</p>";
    ?>
</body>

</html>