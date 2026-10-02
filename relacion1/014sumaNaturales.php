<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 14 - Suma de los n primeros números naturales
  Descripción:Haz un programa PHP que calcule la suma de los n primeros números
              naturales (siendo n entero y positivo)

 
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de naturales</title>
</head>

<body>
    <h1>Suma de los n primeros números naturales</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $n = 106;

    if ($n > 0) {
        // Forma 1: fórmula de Gauss
        $sumaFormula = $n * ($n + 1) / 2;

        // Forma 2: bucle que va sumando uno a uno
        $sumaBucle = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sumaBucle = $sumaBucle + $i;
        }

        echo "<p>Suma de los $n primeros naturales (fórmula) = $sumaFormula</p>";
        echo "<p>Suma de los $n primeros naturales (bucle) = $sumaBucle</p>";
    } else {
        echo "<p>Número inválido, debe ser positivo.</p>";
    }
    ?>
</body>

</html>