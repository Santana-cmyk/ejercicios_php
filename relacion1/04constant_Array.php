<!--

 Nombre: Daniel Santana Bueno
 Curso: 2ºDAW
 Ejercicio: 4 - Array constante
 Descripción:  Retoma el ejercicio 4 de la relación anterior y aplícale estilos con clases de
Bootstrap 5 (experimentaremos así las listas numeradas)

-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array constante de días de la semana</title>
</head>

<body>
    <main class="container mt-4">
        <h1>Días de la semana</h1>
        <a href="index.html">Volver a la relación 1</a>

        <?php
        define("DIAS_SEMANA", [
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sábado",
            "Domingo"
        ]);
        ?>

        <p class="mt-3">El primer día es: <?= DIAS_SEMANA[0] ?></p>

        <p>
            <?php
            foreach (DIAS_SEMANA as $dia) {
                echo $dia . " ";
            }
            ?>
        </p>

        <h2>Lista numerada</h2>
        <ol>
            <?php foreach (DIAS_SEMANA as $dia): ?>
                <li class="list-group-item"><?= $dia ?></li>
            <?php endforeach; ?>
        </ol>
    </main>
</body>

</html>