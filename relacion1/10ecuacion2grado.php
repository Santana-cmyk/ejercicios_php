<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuación de segundo grado</title>
</head>

<body>
    <h1>Ecuación de segundo grado</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $a = 1;
    $b = -3;
    $c = 2;
    $discriminante = $b * $b - 4 * $a * $c;

    if ($a == 0) {
        echo "<p>El coeficiente 'a' no puede ser cero.
         No es una ecuación de segundo grado.</p>";
         
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