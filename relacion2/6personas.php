<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $personas = [
        ["Ana", "García", "ana@example.com", "600123456"],
        ["Luis", "López", "luis@example.com", "611234567"],
        ["Marta", "Sánchez", "marta@example.com", "622345678"],
    ];
    ?>

    <main class="container mt-4">
        <h1>Listado de personas</h1>
        <a href="index.html">Volver a la relación 2</a>

        <table class="table table-striped table-bordered mt-3">
            <thead class="table-success">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($personas as $persona): ?>
                <tr>
                    <td><?= $persona[0] ?></td>
                    <td><?= $persona[1] ?></td>
                    <td><?= $persona[2] ?></td>
                    <td><?= $persona[3] ?></td>
                </tr>
            <?php endforeach; ?>
            </tr>
            </tbody>
        </table>
    </main>
</body>

</html>