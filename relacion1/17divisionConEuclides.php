<!-- Nombre: Daniel Santana Bueno
Curso: 2ºDAW
Ejercicio: 17 - División con el algoritmo de Euclides
Descripción: Haz un script en PHP que calcule la división de dos números naturales
            utilizando el algoritmo de Euclides para la división
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo de Euclides</title>
</head>

<body>
    <h1>Algoritmo de Euclides</h1>
    <h2>División mediante restas sucesivas</h2>
    <h3>Daniel Santana Bueno</h3>

    <?php
    $dividendo = 48;
    $divisor = 18;

    echo "<p>Dividendo: $dividendo</p>";
    echo "<p>Divisor: $divisor</p>";

    // El divisor debe ser mayor que 0 (no se puede dividir entre 0)
    // y el dividendo no puede ser negativo
    if ($divisor > 0 && $dividendo >= 0) {
        $cociente = 0;
        $resto = $dividendo;

        // Mientras quepa el divisor en lo que queda, se resta y se cuenta
        while ($resto >= $divisor) {
            $resto = $resto - $divisor;
            $cociente++;
        }

        echo "<p>Cociente: $cociente</p>";
        echo "<p>Resto: $resto</p>";
        echo "<p>Comprobación: $divisor x $cociente + $resto = " . ($divisor * $cociente + $resto) . "</p>";
    } else {
        echo "<p>El divisor debe ser mayor que cero y el dividendo no puede ser negativo.</p>";
    }
    ?>
</body>

</html>