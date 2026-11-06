<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <main class="container mt-4">
        <h1>Listado de personas</h1>
        <a href="index.html">Volver a la relación 2</a>

        <?php
        $personas = [
            [1, "Franklin", "Horwell", "fhorwell0@sina.com.cn", 3442019428],
            [2, "Barnard", "Conor", "bconor1@kickstarter.com", 6257201959],
            [3, "Hurley", "Pauleit", "hpauleit2@dagondesign.com", 2151759418],
            [4, "Alfy", "Negus", "anegus3@dedecms.com", 4261803754],
            [5, "Peirce", "Slowey", "pslowey4@washingtonpost.com", 2331867778]
        ]
        ?>


        <table class="table table-bodered mt-5">
            <thead class="text-center">
                <th>Listado de Personas</th>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Correo</td>
                    <td>Tlf</td>
                </tr>


                <?php
                foreach ($personas as $persona):
                ?>
                    <tr>
                        <td><?php echo $persona[0] ?></td>
                        <td><?php echo $persona[1] ?></td>
                        <td><?php echo $persona[2] ?></td>
                        <td><?php echo $persona[3] ?></td>
                        <td><?php echo $persona[4] ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>

</html>