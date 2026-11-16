<?php
$rubrica = [
    "inicial" => 0.10,
    "primera" => 0.20,
    "segunda" => 0.30,
    "tercera" => 0.40
];

$enviado = ($_SERVER["REQUEST_METHOD"] ?? "") === "POST";
$nombre = isset($_POST["nombre"]) && is_string($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
$correo = isset($_POST["correo"]) && is_string($_POST["correo"]) ? trim($_POST["correo"]) : "";
$notas = [];
$errores = [];
$notaFinal = 0;

if ($enviado) {
    if ($nombre === "") {
        $errores[] = "Introduce el nombre.";
    }

    if (filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {
        $errores[] = "Introduce un correo electrónico válido.";
    }

    foreach ($rubrica as $evaluacion => $peso) {
        $valor = $_POST[$evaluacion] ?? "";

        if (!is_scalar($valor) || !is_numeric($valor) || $valor < 0 || $valor > 10) {
            $errores[] = "La nota de " . ucfirst($evaluacion) . " debe estar entre 0 y 10.";
        } else {
            $notas[$evaluacion] = (float) $valor;
            $notaFinal += $notas[$evaluacion] * $peso;
        }
    }
}
?>
<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rúbrica de calificaciones</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
    <header class="navbar bg-body-tertiary px-3">
        <h1 class="h4 mb-0">Rúbrica de calificaciones</h1>
        <span class="navbar-text">Daniel Santana Bueno</span>
        <a class="nav-link" href="index.html">Volver a la relación 2</a>
    </header>

    <main class="container py-4">
        <div class="row justify-content-center">
            <section class="col-12 col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 card-title">Datos de la persona</h2>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nombre"
                                        name="nombre"
                                        autocomplete="name"
                                        value="<?= htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") ?>"
                                        required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="correo" class="form-label">Correo electrónico</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="correo"
                                        name="correo"
                                        autocomplete="email"
                                        value="<?= htmlspecialchars($correo, ENT_QUOTES, "UTF-8") ?>"
                                        required>
                                </div>
                            </div>

                            <fieldset class="mb-3">
                                <legend class="fs-6">Notas de las evaluaciones</legend>
                                <div class="row">
                                    <?php foreach ($rubrica as $evaluacion => $peso) { ?>
                                        <div class="col-12 col-sm-6 mb-3">
                                            <label for="<?= $evaluacion ?>" class="form-label">
                                                <?= ucfirst($evaluacion) ?> (<?= $peso * 100 ?> %)
                                            </label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="<?= $evaluacion ?>"
                                                name="<?= $evaluacion ?>"
                                                min="0"
                                                max="10"
                                                step="0.01"
                                                value="<?php
                                                        $valor = $_POST[$evaluacion] ?? "";
                                                        if (is_scalar($valor)) {
                                                            echo htmlspecialchars((string) $valor, ENT_QUOTES, "UTF-8");
                                                        }
                                                        ?>"
                                                required>
                                        </div>
                                    <?php } ?>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-primary">
                                Calcular nota final
                            </button>
                        </form>

                        <?php if ($enviado && $errores !== []) { ?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <ul class="mb-0">
                                    <?php foreach (array_unique($errores) as $error) { ?>
                                        <li><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } elseif ($enviado) { ?>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <h3 class="h5 card-title">Resultado de <?= htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") ?></h3>
                                    <p>
                                        Correo:
                                        <a href="mailto:<?= htmlspecialchars($correo, ENT_QUOTES, "UTF-8") ?>">
                                            <?= htmlspecialchars($correo, ENT_QUOTES, "UTF-8") ?>
                                        </a>
                                    </p>
                                    <ul class="list-group list-group-flush mb-3">
                                        <?php foreach ($rubrica as $evaluacion => $peso) { ?>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span><?= ucfirst($evaluacion) ?> (<?= $peso * 100 ?> %)</span>
                                                <strong><?= number_format($notas[$evaluacion], 2, ",", ".") ?></strong>
                                            </li>
                                        <?php } ?>
                                        <li class="list-group-item table-primary d-flex justify-content-between">
                                            <strong>Nota final</strong>
                                            <strong><?= number_format($notaFinal, 2, ",", ".") ?></strong>
                                        </li>
                                    </ul>
                                    <?php if ($notaFinal >= 5) { ?>
                                        <div class="alert alert-success mb-0" role="status">Ha aprobado.</div>
                                    <?php } else { ?>
                                        <div class="alert alert-danger mb-0" role="status">Ha suspendido.</div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>