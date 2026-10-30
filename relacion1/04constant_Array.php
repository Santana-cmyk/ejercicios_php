<!--

 Nombre: Daniel Santana Bueno
 Curso: 2ºDAW
 Ejercicio: 4 - Array constante
 Descripción:  En un programa PHP, declara un array constante en el que se almacenarán
                los días de la semana. Muestra por pantalla:
                ● el primer dia de la semana
                ● todos los días secuencialmente
                ● lo mismo que el anterior, pero en formato de lista numerada
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array constante de días de la semana</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
    <main class="container mt-4">
        <h1>Días de la semana</h1>
        <a href="index.html">Volver a la relación 1</a>

        <?php
        define("DIAS_SEMANA", [
            "Lunes", "Martes", "Miércoles", "Jueves",
            "Viernes", "Sábado", "Domingo"
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

        <h2 class="h4">Lista numerada</h2>
        <ol class="list-group list-group-numbered">
            <?php foreach (DIAS_SEMANA as $dia): ?>
                <li class="list-group-item"><?= $dia ?></li>
            <?php endforeach; ?>
        </ol>
    </main>
</body>

</html>