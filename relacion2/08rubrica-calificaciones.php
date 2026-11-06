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
        <h1 class="h1 nav-brand">Rúbrica de calificaciones</h1>
        <h2 class="h2 nav-item">Daniel Santana Bueno</h2>
        <a class="nav-item" href="index.html">Volver a la relacion 2</a>
    </header>
    <?php
    $rubrica = [
        "inicial" => 0.10,
        "primera" => 0.20,
        "segunda" => 0.30,
        "tercera" => 0.40
    ];

    $notasAna = [
        "inicial" => 6,
        "primera" => 8,
        "segunda" => 7,
        "tercera" => 10
    ];

    $notaFinal = 0;
    ?>

    <main class="container">
        <div class="card">
            <?php
            foreach ($rubrica as $evaluacion => $peso) {
                $nota = $notasAna[$evaluacion];
                $notaFinal += $nota * $peso; // nota multiplicada por su peso
                echo "<p>Evaluación $evaluacion: nota $nota (peso " . ($peso * 100) . " %)</p>";
            }
            ?>
        </div>
    </main>

</body>

</html>