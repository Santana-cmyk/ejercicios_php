<!--
  Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 8 - Rúbrica de calificaciones
  Descripción: Crea en un script PHP dos arrays asociativos paralelos, uno con la rúbrica de
                4 calificaciones (inicial, primera, segunda y tercera) y otro con las notas
                particulares de una persona. A continuación, computará la nota final de esa
                persona, y muéstrala por pantalla.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rúbrica de calificaciones</title>
</head>
<body>
    <h1>Rúbrica de calificaciones</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $rubrica = [
        "inicial" => 0.10,
        "primera" => 0.20,
        "segunda" => 0.30,
        "tercera" => 0.40
    ];

    $notasAna = [
        "inicial" => 6,
        "primera" => 8,
        "segunda" => 7,
        "tercera" => 10
    ];

    $notaFinal = 0;  

    echo "<h3>Notas de Ana:</h3>";

    // Se recorre la rúbrica; con la clave se obtiene la nota de Ana
    foreach ($rubrica as $evaluacion => $peso) {
        $nota = $notasAna[$evaluacion];
        $notaFinal += $nota * $peso;   // nota multiplicada por su peso
        echo "<p>Evaluación $evaluacion: nota $nota (peso " . ($peso * 100) . " %)</p>";
    }

    echo "<p>La nota final de Ana es: $notaFinal</p>";

    // IF para decidir si aprueba o suspende
    if ($notaFinal >= 5) {
        echo "<p><b>¡Ana ha aprobado!</b></p>";
    } else {
        echo "<p><b>¡Ana ha suspendido!</b></p>";
    }
    ?>
</body>
</html>
