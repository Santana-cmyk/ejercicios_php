<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 19 - Natural a binario
  Descripción: Haz un script PHP en el que conviertas en binario un número natural
                decimal
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural a binario</title>
</head>

<body>
    <h1>Natural a binario</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $natural = 14;
    $binario = "";

    if ($natural == 0) {
        $binario = "0";
    } else {
        for ($numero = $natural; $numero > 0; $numero = intdiv($numero, 2)) {
            $resto = $numero % 2;
            $binario = $resto . $binario;
        }
    }

    echo "<p>El número natural 14 en binario es: $binario</p>";
    ?>
</body>

</html>