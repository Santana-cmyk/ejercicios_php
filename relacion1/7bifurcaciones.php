<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales y medias</title>
</head>
<body>
    <?php
        const PENALIZACION = 0.25;
        $nota1 = 7;
        $nota2 = 8;
        $faltas = 3;
        $media = ($nota1 + $nota2) / 2;
        $notaFinal = $media - $faltas * PENALIZACION;

        if($notaFinal >= 5) {
            echo "<p>El alumno ha aprobado con una nota final de: " . $notaFinal . "</p>";
        } else {
            echo "<p>El alumno ha suspendido con una nota final de: " . $notaFinal . "</p>";
        }


    ?>
</body>
</html>