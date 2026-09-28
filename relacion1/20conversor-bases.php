<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Bases numéricas</title>
</head>

<body>
    <h1>Conversor de Bases numéricas</h1>
    <h2>Daniel Santana Bueno</h2>

    <!-- Binario a Decimal -->
    <?php
    $binario = "1110";
    $decimal = 0; // El acumulador debe empezar en cero
    $longitud = strlen($binario);

    for ($i = 0; $i < $longitud; $i++) {
        $bit = $binario[$longitud - 1 - $i];
        if ($bit == '1') {
            $decimal += pow(2, $i);
        }
    }
    echo "<p>El número binario $binario en decimal es: $decimal</p>";
    ?>

    <!-- Convertir a hexadecimal -->
    <?php
    $hexadecimal = dechex($decimal);
    echo "<p>El número decimal $decimal en hexadecimal es: $hexadecimal</p>";
    ?>

    <!-- Convertir a octal -->
    <?php
    $octal = decoct($binario);
    echo "<p>El número decimal $binario en octal es: $octal</p>";
    ?>

</body>

</html>