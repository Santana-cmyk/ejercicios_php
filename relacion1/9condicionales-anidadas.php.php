<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué tipo de triángulo es?</title>
</head>
<body>
    <?php

    $lado1 = 5;
    $lado2 = 5;
    $lado3 = 5;

    if($lado1 == $lado2 && $lado2 == $lado3) {
        echo "<p>El triángulo es equilátero.</p>";
    } elseif($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "<p>El triángulo es isósceles.</p>";
    } else {
        echo "<p>El triángulo es escaleno.</p>";
    }
    ?>
</body>
</html>