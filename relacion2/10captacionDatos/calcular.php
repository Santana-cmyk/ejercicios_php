<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resultado de la rúbrica</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body class="p-3">
    <header class="navbar">
        <h1 class="navbar-brand">Rúbrica de calificaciones</h1>
        <a class="nav-link" href="index.html">Volver al formulario</a>
    </header>

    <main class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rubrica = [
                "inicial" => 0.10,
                "primera" => 0.20,
                "segunda" => 0.30,
                "tercera" => 0.40
            ];

            $notaFinal = 0;
            foreach ($rubrica as $evaluacion => $peso) {
                $notaFinal += $_POST[$evaluacion] * $peso;
            }
        ?>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Resultado</h2>
                    <p>Nota final: <?= number_format($notaFinal, 2, ",", ".") ?></p>
                    <?php if ($notaFinal >= 5) { ?>
                        <div class="alert alert-success" role="alert">¡Has aprobado!</div>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert">Has suspendido.</div>
                    <?php } ?>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-info" role="alert">
                Accede desde el formulario para calcular la nota.
            </div>
        <?php } ?>
    </main>
</body>

</html>