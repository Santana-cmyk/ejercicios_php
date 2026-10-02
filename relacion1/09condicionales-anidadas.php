<!--
 Nombre: Daniel Santana Bueno
 Curso: 2ºDAW
  Ejercicio: 9 - Condicionales anidadas
  Descripción:En un programa PHP, valora a partir de los 3 lados de un triángulo si es
              equilátero, isósceles y escaleno, y muestra esa valoración por pantalla
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué tipo de triángulo es?</title>
</head>
<body>
    <h1>¿Qué tipo de triángulo es?</h1>
    <?php
    $lado1 = 5;
    $lado2 = 5;
    $lado3 = 5;

    echo "<p>Lados: $lado1, $lado2 y $lado3</p>";

    // 1.º: los lados deben ser positivos
    if ($lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0) {
        echo "<p>Los lados deben ser mayores que cero.</p>";
    // 2.º: cada lado debe ser menor que la suma de los otros dos
    } elseif ($lado1 >= $lado2 + $lado3 || $lado2 >= $lado1 + $lado3 || $lado3 >= $lado1 + $lado2) {
        echo "<p>Con esos lados no se puede formar un triángulo.</p>";
    } else {
        // 3.º: clasificación según los lados iguales
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "<p>El triángulo es equilátero.</p>";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "<p>El triángulo es isósceles.</p>";
        } else {
            echo "<p>El triángulo es escaleno.</p>";
        }
    }
    ?>
</body>
</html>
