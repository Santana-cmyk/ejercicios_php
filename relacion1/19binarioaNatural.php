<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binario a Natural</title>
</head>

<body>
    <h1>Binario a Natural</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $binario = "1110";
    $decimal = 0;
    $longitud = strlen($binario);

    for ($i = 0; $i < $longitud; $i++) {
        $bit = $binario[$longitud - 1 - $i];
        if ($bit == '1') {
            $decimal += pow(2, $i);
        }
    }


    echo "<p>El número binario $binario en decimal es: $decimal</p>";

    ?>
</body>

</html>