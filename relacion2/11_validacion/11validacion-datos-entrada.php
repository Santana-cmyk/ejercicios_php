<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validación de datos de entrada</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
    <header class="navbar bg-body-tertiary px-3">
        <h1 class="h4 mb-0">Validación de datos</h1>
        <span class="navbar-text">Daniel Santana Bueno</span>
        <a class="nav-link" href="../index.html">Volver a la relación 2</a>
    </header>

    <main class="container py-4">
        <div class="row justify-content-center">
            <section class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 card-title">Calcula la nota final</h2>
                        <p class="card-text">
                            La nota final es la media de las dos notas menos 0,25 puntos por cada falta.
                        </p>

                        <form action="11procesar-validacion.php" method="post">
                            <div class="mb-3">
                                <label for="nota1" class="form-label">Primera nota</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="nota1"
                                    name="nota1"
                                    min="0"
                                    max="10"
                                    step="0.01"
                                    required>
                                <div class="form-text">Introduce un valor entre 0 y 10.</div>
                            </div>

                            <div class="mb-3">
                                <label for="nota2" class="form-label">Segunda nota</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="nota2"
                                    name="nota2"
                                    min="0"
                                    max="10"
                                    step="0.01"
                                    required>
                                <div class="form-text">Introduce un valor entre 0 y 10.</div>
                            </div>

                            <div class="mb-3">
                                <label for="faltas" class="form-label">Número de faltas</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="faltas"
                                    name="faltas"
                                    min="0"
                                    step="1"
                                    required>
                                <div class="form-text">Introduce un entero igual o superior a 0.</div>
                            </div>

                            <input type="hidden" name="enviar" value="1">
                            <div class="d-flex flex-wrap gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Enviar con POST
                                </button>
                                <button type="submit" class="btn btn-outline-primary" formmethod="get">
                                    Enviar con GET
                                </button>
                            </div>
                        </form>

                        <div class="alert alert-info mt-3 mb-0" role="note">
                            GET muestra los datos en la dirección del navegador; POST los envía en el cuerpo de la petición.
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
