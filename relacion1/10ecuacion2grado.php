<!--
 Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 10 - Ecuación de segundo grado
  Descripción: Haz un programa PHP que resuelva una ecuación de segundo grado
                siempre que los resultados sean reales
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuación de segundo grado</title>
</head>

<body>
    <h1>Ecuación de segundo grado</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    // Coeficientes de la ecuación
    $a = 1;
    $b = -3;
    $c = 2;

    echo "<p>Ecuación: ({$a})x² + ({$b})x + ({$c}) = 0</p>";

    // Discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    if ($a == 0) {
        echo "<p>El coeficiente 'a' no puede ser cero. No es una ecuación de segundo grado.</p>";
    } else {
        if ($discriminante > 0) {
            // Dos soluciones: sqrt() calcula la raíz cuadrada
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
            echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2</p>";
        } elseif ($discriminante == 0) {
            // Una solución doble
            $x = -$b / (2 * $a);
            echo "<p>La ecuación tiene una solución real: x = $x</p>";
        } else {
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        }
    }
    ?>
</body>

</html>