<!--

  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 12 - Bifurcación con switch
  Descripción: Realiza un programa php que, a partir de una nota numérica entera entre
                1 y 10 devuelva:
                ● Sobresaliente si es 9 ó 10
                ● Notable si es 7 u 8
                ● Bien si es un 6
                ● Suficiente si es un 5
                ● Suspenso, si es 1,2,3 ó 4
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <h1>Bifurcación mediante switch</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $nota = 5;   // nota entera de 0 a 10
    echo "<p>Nota en la variable: $nota</p>";

    switch ($nota) {
        // Varios case seguidos comparten el mismo bloque de código
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<p>Suspenso</p>";
            break;   // break evita que siga ejecutando los case siguientes

        case 5:
            echo "<p>Suficiente</p>";
            break;

        case 6:
            echo "<p>Bien</p>";
            break;

        case 7:
        case 8:
            echo "<p>Notable</p>";
            break;

        case 9:
        case 10:
            echo "<p>Sobresaliente</p>";
            break;

        // default se ejecuta si no coincide ningún case
        default:
            echo "<p>Esta nota no es válida</p>";
    }
    ?>
</body>

</html>