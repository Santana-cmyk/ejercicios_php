<!--
 Nombre: Daniel Santana Bueno
 Curso: 2ºDAW
 Ejercicio: 5 - Array asociativo
 Descripción: Crea un array asociativo constante, en el que utilices como clave el día de la
                semana, y como valor, la temperatura máxima de ese día en formato real. A
                continuación, muestra:
                ● la temperatura del primer dia de la semana
                ● la temperatura de todos los días, secuencialmente
                ● lo mismo que el anterior, pero en formato de lista numerada
                ● idem, en forma de tabla
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo | Temperaturas</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
    <?php
        const TEMPERATURAS = [
        "Lunes"     => 25,
        "Martes"    => 30,
        "Miércoles" => 35,
        "Jueves"    => 40,
        "Viernes"   => 45,
        "Sábado"    => 50,
        "Domingo"   => 55
    ];
    ?>

    <main class="container mt-4">
        <h1>Temperaturas de la semana</h1>
        <a href="index.html">Volver a la relación 1</a>

        <p class="mt-3">Temperatura del lunes: <?= TEMPERATURAS["Lunes"] ?> °C</p>

        <h2 class="h4">Lista con viñetas</h2>
        <ul class="list-group mb-3">
            <?php foreach (TEMPERATURAS as $dia => $temperatura): ?>
                <li class="list-group-item"><?= $dia ?>: <?= $temperatura ?> °C</li>
            <?php endforeach; ?>
        </ul>

        <h2 class="h4">Lista numerada</h2>
        <ol class="list-group list-group-numbered mb-3">
            <?php foreach (TEMPERATURAS as $dia => $temperatura): ?>
                <li class="list-group-item"><?= $dia ?>: <?= $temperatura ?> °C</li>
            <?php endforeach; ?>
        </ol>

        <h2 class="h4">Tabla</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Día</th>
                    <th>Temperatura (°C)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (TEMPERATURAS as $dia => $temperatura): ?>
                    <tr>
                        <td><?= $dia ?></td>
                        <td><?= $temperatura ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2 class="h4">Componentes de prueba</h2>
        <button class="btn btn-primary">Botón</button>
        <button class="btn btn-secondary">Otro botón</button>
        <span class="spinner-border spinner-border-sm" role="status"></span>
    </main>
</body>

</html>