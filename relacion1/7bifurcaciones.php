<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 7 - Bifurcaciones (if / else)
  Descripción: Calcula la nota final de una persona a partir de la media de dos notas
                numéricas iniciales, y descontando 0.25 por cada falta sin justificar. Muestra el
                resultado por pantalla, indicando si la persona aprueba o suspende
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales y medias</title>
</head>

<body>
    <h1>Nota final con penalización por faltas</h1>
    <?php
    const PENALIZACION = 0.25;   // puntos que se restan por cada falta

    // Datos del alumno
    $nota1  = 7;
    $nota2  = 8;
    $faltas = 3;

    // Media de las dos notas y nota final tras penalizar
    $media     = ($nota1 + $nota2) / 2;
    $notaFinal = $media - $faltas * PENALIZACION;

    // IF para decidir si aprueba o suspende
    if ($notaFinal >= 5) {
        echo "<p>El alumno ha aprobado con una nota final de: $notaFinal</p>";
    } else {
        echo "<p>El alumno ha suspendido con una nota final de: $notaFinal</p>";
    }
    ?>
</body>

</html>