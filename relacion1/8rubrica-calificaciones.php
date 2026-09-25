<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- 8- Crea en un script PHP dos arrays asociativos paralelos, uno con la rúbrica de
4 calificaciones (inicial, primera, segunda y tercera) y otro con las notas
particulares de una persona. A conti nuación, computará la nota final de esa
persona, y muéstrala por pantalla.recorrido secuencial de array asociativo con foreach y
acceso directo por clave a un segundo array, operadores matemáticos, bifurcación
simple -->


<body>
    <h1>Rúbrica de calificaciones</h1>
    <h2>Daniel Santana Bueno</h2>
    <p>Aplicacion completa con un gato de imagen y un fondo de pantalla.</p>
    <?php
       
        $rubrica = [
            "inicial",
            "primera",
            "segunda",
            "tercera"
        ];

        $notasAna = [
            6,
            8,
            7,
            10
        ];

        echo "<h3>Notas de Ana:</h3>";

        foreach($rubrica as $evaluacion) {
            $nota = $notasAna[array_search($evaluacion, $rubrica)];
            echo "<p>La nota de " . $evaluacion . " es: " . $nota . "</p>";
        }

        $notaFinal = array_sum($notasAna) / count($notasAna);
        echo "<p>La nota final de Ana es: " . $notaFinal . "</p>";


        if($notaFinal >= 5) {
            echo "<p><b>¡Ana ha aprobado!</b></p>";
        } else {
            echo "<p><b>¡Ana ha suspendido!</b></p>";
        }
    ?>
</body>
</html>