<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rúbrica de calificaciones</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body class="p-3">
    <header class="navbar">
        <h1 class="h1 navbar-brand">Rúbrica de calificaciones</h1>
        <h3 class="h3 nav-item">Daniel Santana Bueno</h3>
        <a class="nav-link" href="index.html">Volver a la relacion 2</a>
    </header>
    <?php
    $rubrica = [
        "inicial" => 0.10,
        "primera" => 0.20,
        "segunda" => 0.30,
        "tercera" => 0.40
    ];

    $esEnvio = isset($_POST["calcular"]);
    $notas = [];
    $errores = [];
    $notaFinal = 0;

    if ($esEnvio) {
        foreach ($rubrica as $evaluacion => $peso) {
            if (
                !isset($_POST[$evaluacion]) ||
                !is_scalar($_POST[$evaluacion]) ||
                !is_numeric($_POST[$evaluacion]) ||
                $_POST[$evaluacion] < 0 ||
                $_POST[$evaluacion] > 10
            ) {
                $errores[] = "Introduce una nota válida entre 0 y 10 para la evaluación $evaluacion.";
            } else {
                $notas[$evaluacion] = $_POST[$evaluacion];
                $notaFinal += $notas[$evaluacion] * $peso;
            }
        }
    }
    ?>

    <main class="container">
        <form action="" method="post">
            <?php foreach ($rubrica as $evaluacion => $peso) { ?>
                <div class="mb-3">
                    <label for="<?= $evaluacion ?>" class="form-label">
                        Evaluación <?= ucfirst($evaluacion) ?> <?= $peso * 100 ?>%
                    </label>
                    <input
                        type="number"
                        name="<?= $evaluacion ?>"
                        id="<?= $evaluacion ?>"
                        class="form-control"
                        min="0"
                        max="10"
                        step="0.01"
                        value="<?php
                                if (isset($notas[$evaluacion])) {
                                    echo htmlspecialchars($notas[$evaluacion], ENT_QUOTES, "UTF-8");
                                }
                                ?>"
                        required>
                </div>
            <?php } ?>
            <button type="submit" name="calcular" value="1" class="btn btn-primary">
                Calcular nota
            </button>
        </form>

        <?php if ($esEnvio && count($errores) > 0) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php foreach ($errores as $error) { ?>
                    <p class="mb-0"><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></p>
                <?php } ?>
            </div>
        <?php } elseif ($esEnvio) { ?>
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="card-title">Resultado</h4>
                    <?php foreach ($rubrica as $evaluacion => $peso) { ?>
                        <p>
                            Evaluación <?= ucfirst($evaluacion) ?>:
                            nota <?= htmlspecialchars($notas[$evaluacion], ENT_QUOTES, "UTF-8") ?>
                            (peso <?= $peso * 100 ?> %)
                        </p>
                    <?php } ?>
                    <p>La nota final es: <?= number_format($notaFinal, 2, ",", ".") ?></p>
                    <?php if ($notaFinal >= 5) { ?>
                        <div class="alert alert-success" role="alert">¡Has aprobado!</div>
                    <?php } else { ?>
                        <div class="alert alert-danger" role="alert">Has suspendido.</div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>


    </main>

</body>

</html>