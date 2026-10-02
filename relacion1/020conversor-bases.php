<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 20 - Conversor de bases numéricas
  Descripción: Mejora el ejercicio anterior para que se pueda convertir a binario, octal o
               hexadecimal
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de bases numéricas</title>
</head>

<body>
    <h1>Conversor de bases numéricas</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    // 1) Binario a decimal (mismo método que el ejercicio 19)
    $binario = "1110";
    $decimal = 0;
    $longitud = strlen($binario);

    for ($i = 0; $i < $longitud; $i++) {
        $bit = $binario[$longitud - 1 - $i];
        if ($bit == '1') {
            $decimal = $decimal + pow(2, $i);
        }
    }
    echo "<p>El número binario $binario en decimal es: $decimal</p>";

    // 2) Decimal a hexadecimal
    $hexadecimal = dechex($decimal);
    echo "<p>El número decimal $decimal en hexadecimal es: $hexadecimal</p>";

    // 3) Decimal a octal (se usa $decimal, no el texto binario)
    $octal = decoct($decimal);
    echo "<p>El número decimal $decimal en octal es: $octal</p>";
    ?>
</body>

</html>