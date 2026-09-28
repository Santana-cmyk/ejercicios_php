<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma naturales</title>
</head>

<body>
    <h1>Suma de los n primeros numeros naturales</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $a = 106;

    if ($a > 0) {
        $suma = (int) $a*($a + 1) / 2;
        echo "<p>suma de los primeros n naturales de $a = $suma</p>";
    } else {
        echo "<p>Número inválido, debe ser positivo";
    }

    ?>
</body>

</html>