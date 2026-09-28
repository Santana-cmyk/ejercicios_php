<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Tu número es primo?</title>
</head>

<body>
    <h1>¿El numero es primo?</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $a = 97;
    $esPrimo = true;

    echo "Valor en la variable: $a <br>";
    if ($a < 2) {
        echo "<p>No es primo</p>";
        $esPrimo = false;
    } else {
        $raiz = sqrt($a);
        for ($i = 2; $i <= $raiz; $i++) {
            if ($a % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
    }
    
    if ($esPrimo) {
        echo "<p>Es primo</p>";
    } else {
        echo "<p>No es primo</p>";
    }
    ?>

</body>

</html>