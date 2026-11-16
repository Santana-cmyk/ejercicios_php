<?php
const PENALIZACION = 0.25;

$metodo = $_SERVER["REQUEST_METHOD"] ?? "";
$datos = $metodo === "POST" ? $_POST : ($metodo === "GET" ? $_GET : []);
$esEnvio = in_array($metodo, ["GET", "POST"], true) && isset($datos["enviar"]);
$errores = [];
$notaFinal = null;
$nota1 = null;
$nota2 = null;
$faltas = null;

if ($esEnvio) {
    foreach (["nota1", "nota2"] as $campo) {
        if (
            !isset($datos[$campo]) ||
            !is_scalar($datos[$campo]) ||
            !is_numeric($datos[$campo]) ||
            (float) $datos[$campo] < 0 ||
            (float) $datos[$campo] > 10
        ) {
            $errores[] = "Cada nota debe ser un número entre 0 y 10.";
        }
    }

    if (
        !isset($datos["faltas"]) ||
        !is_scalar($datos["faltas"]) ||
        filter_var($datos["faltas"], FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]]) === false
    ) {
        $errores[] = "El número de faltas debe ser un entero igual o superior a 0.";
    }

    if ($errores === []) {
        $nota1 = (float) $datos["nota1"];
        $nota2 = (float) $datos["nota2"];
        $faltas = (int) $datos["faltas"];
        $media = ($nota1 + $nota2) / 2;
        $notaFinal = $media - $faltas * PENALIZACION;
    }
}
?>
<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado de la validación</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
    <header class="navbar bg-body-tertiary px-3">
        <h1 class="h4 mb-0">Resultado del cálculo</h1>
        <a class="nav-link" href="11validacion-datos-entrada.php">Volver al formulario</a>
    </header>

    <main class="container py-4">
        <div class="row justify-content-center">
            <section class="col-12 col-md-8 col-lg-6">
                <?php if (!$esEnvio) { ?>
                    <div class="alert alert-info" role="alert">
                        Accede desde el formulario para enviar los datos mediante GET o POST.
                    </div>
                <?php } elseif ($errores !== []) { ?>
                    <div class="alert alert-danger" role="alert">
                        <h2 class="h5 alert-heading">No se han podido validar los datos</h2>
                        <ul class="mb-0">
                            <?php foreach (array_unique($errores) as $error) { ?>
                                <li><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 card-title">Resultado</h2>
                            <p>Método utilizado: <strong><?= htmlspecialchars($metodo, ENT_QUOTES, "UTF-8") ?></strong></p>

                            <div class="table-responsive">
                                <table class="table table-striped align-middle">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Primera nota</th>
                                            <td><?= number_format($nota1, 2, ",", ".") ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Segunda nota</th>
                                            <td><?= number_format($nota2, 2, ",", ".") ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Faltas</th>
                                            <td><?= $faltas ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nota final</th>
                                            <td><strong><?= number_format($notaFinal, 2, ",", ".") ?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <?php if ($notaFinal >= 5) { ?>
                                <div class="alert alert-success mb-0" role="status">El alumno ha aprobado.</div>
                            <?php } else { ?>
                                <div class="alert alert-danger mb-0" role="status">El alumno ha suspendido.</div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <a class="btn btn-secondary mt-3" href="11validacion-datos-entrada.php">
                    Volver al formulario
                </a>
            </section>
        </div>
    </main>
</body>

</html>
