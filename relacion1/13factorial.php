<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial en PHP</title>
</head>

<body>
    <h1>Calculo del factorial de un número con PHP</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php

    $a = 10;

    if ($a > 0) {
        echo "Factorial de $a";
        for ($i = $a -1; $i > 0; $i--) {
            $factorial = ($a * $i);
            echo "<p>$a * $i = $factorial<p>";
        }
    } else {
        echo "<p>El numero debe ser positivo</p>";
    }

    ?>


</body>

</html>