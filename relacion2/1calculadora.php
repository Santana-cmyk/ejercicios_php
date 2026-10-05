<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>
<!-- como se monta un grid para distribuir el contenido: -->
<!-- 1º un div de class container-->
<div class="container-fluid bg-secondary-subtle">
    <div id="main" class="container text-center" class="bg-secondary-subtle">
        <h2 class="text-primary">Calculadora básica</h2>
        <!-- 2º un div de class row-->
        <div class="row">
            <!-- Varios divs para columnas, indicando reparto de las 12 areas de columna -->
            <div class="col-md-3 col-sm-1 col-0">
                <!-- Aqui va un espacio en blanco a la izquierda -->
            </div>
            <div class="col-md-6 col-sm-10 col-12">
                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-3">
                    <div class="mb-3">
                        <label for="n1" class="form-label fw-bold">Numero 1</label>
                        <input type="number" name="n1" class="form-control" id="n1" aria-describedby="number1Help">
                    </div>
                    <div class="mb-3">
                        <label for="op" class="form-label fw-bold">Operacion</label>
                        <select class="form-select" name="op" id="op" aria-label="Default select example">
                            <option selected>Selecciona una operacion</option>
                            <option value="add">+</option>
                            <option value="subtract">-</option>
                            <option value="multiply">×</option>
                            <option value="divide">÷</option>
                        </select>

                        <div class="mb-3">
                            <label for="n2" class="form-label fw-bold">Numero 2</label>
                            <input type="number" name="n2" class="form-control" id="n2" aria-describedby="number2Help">
                        </div>

                </form>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="Calcular" value="Calcular">Calcular</button>
                </div>
            </div>
            <div class="col-md-3 col-sm-1 col-0">
                <!-- Aqui va un espacio en blanco a la derecha -->
            </div>
        </div>
    </div>
</div>

<!-- Aqui se procesan los datos al pulsar el botón enviar -->

<?php
if (isset($_GET["Calcular"])) {
    // zona de "descarga de datos" de la calculadora
    $n1 = (float) $_GET['n1'];
    $n2 = (float) $_GET['n2'];
    $op = $_GET['op'];

    $resultado = match ($op) {
        "add" => $n1 + $n2,
        "subtract" => $n1 - $n2,
        "multiply" => $n1 * $n2,
        "divide" => $n1 / $n2,
        default => "Operacion no valida",
    };

    echo "<h3 class='text-success text-center'>El resultado es: $resultado</h3>";
};
?>



<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous">
</script>
</body>

</html>