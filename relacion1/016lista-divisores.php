<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 16 - Lista de divisores
  Descripción: Haz un programa que muestre todos los divisores de un número entero y
                positivo. Irá mostrando cada número que se prueba y si resulta ser divisor,
                aparecerá marcado visiblemente, por ejemplo con otro color.
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores de un número</title>
    <style>
        b {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Calcula y muestra los divisores de un número</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $num = 10;

    echo "<h3>Divisores del número $num</h3>";

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo "<b>$i</b> ";   // divisor: en verde y negrita
        } else {
            echo "$i ";          // no es divisor: texto normal
        }
    }
    ?>
</body>

</html>