<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuación de segundo grado mejorada</title>
</head>

<body>
    <h1>Ecuación de segundo grado mejorada</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $a = 3;
    $b = 0;
    $c = 15;
    $discriminante = $b * $b - 4 * $a * $c;

    if ($a == 0) {
        if ($b == 0) {
            echo "<p>La ecuación no tiene solución lógica.</p>";
        } else {
            $x = -$c / $b;
            echo "<p>La ecuación es de primer grado y su solución es: x = $x</p>";
        }
    } else {
        if ($discriminante > 0) {
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
            echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2</p>";
        } elseif ($discriminante == 0) {
            $x = -$b / (2 * $a);
            echo "<p>La ecuación tiene una solución real: x = $x</p>";
        } else {
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        }
    }
    ?>
</body>

</html>