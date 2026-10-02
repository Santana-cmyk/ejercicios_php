<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 19 - Binario a natural
  Descripción: Haz un script PHP en el que conviertas en binario un número natural
                decimal
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binario a natural</title>
</head>

<body>
    <h1>Binario a natural</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $binario = "1110";
    $decimal = 0;
    $valido = true;
    $longitud = strlen($binario);   // número de bits

    for ($i = 0; $i < $longitud; $i++) {
        // $i = 0 es el bit de más a la derecha
        $bit = $binario[$longitud - 1 - $i];

        if ($bit == '1') {
            $decimal = $decimal + pow(2, $i);   // pow(2, i) = 2 elevado a i
        } elseif ($bit != '0') {
            $valido = false;   // si hay otro carácter, no es binario
        }
    }

    if ($valido) {
        echo "<p>El número binario $binario en decimal es: $decimal</p>";
    } else {
        echo "<p>$binario no es un número binario válido (solo 0 y 1).</p>";
    }
    ?>
</body>

</html>