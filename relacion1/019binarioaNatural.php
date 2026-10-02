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
    <title>Decimal a binario</title>
</head>

<body>
    <h1>Decimal a binario</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $decimal = 14;
    $binario = "";

    if ($decimal == 0) {
        $binario = "0";
    } else {
        for ($numero = $decimal; $numero > 0; $numero = intdiv($numero, 2)) {
            $resto = $numero % 2;
            $binario = $resto . $binario;
        }
    }

    echo "<p>El número decimal 14 en binario es: $binario</p>";
    ?>
</body>

</html>