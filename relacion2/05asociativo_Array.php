<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo | Temperaturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

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

    <main class="Container mt-4 p-2">
        <h1>Temperaturas de la semana</h1>

        <a href="index.html">Volver a la relación 2</a>

        <p>Temperatura del lunes: <?= TEMPERATURAS["Lunes"] ?> °C</p>

        <h2>Lista con viñetas</h2>

        <ul>
            <?php foreach (TEMPERATURAS as $dia => $temperatura): ?>
                <li><?= $dia ?>: <?= $temperatura ?> °C</li>
            <?php endforeach; ?>
        </ul>

        <h2>Lista numerada</h2>

        <ol>
            <?php foreach (TEMPERATURAS as $dia => $temperatura): ?>
                <li><?= $dia ?>: <?= $temperatura ?> °C</li>
            <?php endforeach; ?>
        </ol>

        <h2>Tabla</h2>

        <table class="table-bordered  rounded-2">
            <thead>
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


        <h2>Componentes de prueba</h2>

        <!-- Botón de warning -->
        <button class="btn bg-warning">Warning</button>
        <!-- Botón de danger -->
        <button class="btn bg-danger">Danger</button>
        <!-- Spinner -->
        <button class="spinner-border"></button>

        <!-- list group -->
        <div class="list-group mt-4 ">
            <button type="button" class="list-group-item list-group-item-action active">
                list group
            </button>
            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
            <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
        </div>

        <!-- Pagination -->

        <nav aria-label="Page navigation example" class="mt-4">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>



    </main>

</body>

</html>
