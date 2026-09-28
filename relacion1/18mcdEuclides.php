<!DOCTYPE html>
<html lang="en">
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
     
    echo "<p>Valor en la variable a: $a</p>";
    echo "<p>Valor en la variable b: $b</p>";

    while ($b != 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }

    echo "<p>El MCD es: $a</p>";
    ?>
</body>
</html>