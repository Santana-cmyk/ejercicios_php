<?php
$directorioDestino = 'uploads/';
$archivoMuro = 'muro.txt';
if (!file_exists($directorioDestino)) {
    mkdir($directorioDestino, 0777, true);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $autor = str_replace('|', '', $_POST['autor']);
    $mensaje = str_replace(array('|', "\r", "\n"), ' ', $_POST['mensaje']);
    $imagenes = array();
    if (isset($_FILES['ficheros']) && is_array($_FILES['ficheros']['name'])) {
        $totalArchivos = count($_FILES['ficheros']['name']);
        for ($i = 0; $i < $totalArchivos; $i++) {
            if ($_FILES['ficheros']['error'][$i] === UPLOAD_ERR_OK) {
                $nombreLimpio = time() . '_' . $i . '_' . basename($_FILES['ficheros']['name'][$i]);
                if (move_uploaded_file($_FILES['ficheros']['tmp_name'][$i], $directorioDestino . $nombreLimpio)) {
                    $imagenes[] = $nombreLimpio;
                }
            }
        }
    }
    $linea = $autor . '|' . date('d/m/Y H:i') . '|' . $mensaje . '|' . implode(',', $imagenes) . "\n";
    file_put_contents($archivoMuro, $linea, FILE_APPEND);
    header('Location: muro.php');
    exit;
}
$publicaciones = array();
if (file_exists($archivoMuro)) {
    $publicaciones = array_reverse(file($archivoMuro, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi muro</title>
    <style>
        body {
            background: #f0f2f5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            background: #1877f2;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }

        main {
            max-width: 600px;
            margin: 20px auto;
        }

        .tarjeta {
            background: white;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px #aaa;
        }

        .autor {
            font-weight: bold;
            color: #1877f2;
        }

        .fecha {
            color: gray;
            font-size: 12px;
        }

        img {
            width: 100%;
            margin-top: 10px;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <header>Mi muro</header>
    <main>
        <div class="tarjeta"><a href="ejercicio4.html">Nueva publicación</a></div>
        <?php foreach ($publicaciones as $publicacion) {
            $partes = explode('|', $publicacion);
            $imagenes = array_filter(explode(',', $partes[3]));
        ?>
            <div class="tarjeta">
                <div class="autor"><?php echo htmlspecialchars($partes[0]); ?></div>
                <div class="fecha"><?php echo htmlspecialchars($partes[1]); ?></div>
                <p><?php echo htmlspecialchars($partes[2]); ?></p>
                <?php foreach ($imagenes as $imagen) { ?>
                    <img src="uploads/<?php echo htmlspecialchars($imagen); ?>" alt="imagen">
                <?php } ?>
            </div>
        <?php } ?>
    </main>
</body>

</html>