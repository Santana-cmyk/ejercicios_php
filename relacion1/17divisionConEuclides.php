<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo de euclides</title>
</head>

<body>
    <h1>Algoritmo de euclides</h1>
    <h2>Realización de una división utilizando el algoritmo de euclides</h2>
    <h3>Daniel Santana Bueno</h3>

    <?php
    $dividendo = 48;
    $divisor = 18;

    echo "<p>Dividendo: $dividendo</p>";
    echo "<p>Divisor: $divisor</p>";

    if ($divisor > 0) {
        $cociente = 0;
        $resto = $dividendo;

        while ($resto >= $divisor) {
            $resto -= $divisor;
            $cociente++;
        }

        echo "<p>Cociente: $cociente</p>";
        echo "<p>Resto: $resto</p>";
    } else {
        echo "<p>El divisor debe ser mayor que cero.</p>";
    }
    ?>
</body>

</html>