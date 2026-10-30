<?php
$directorioDestino = 'uploads/';
if (!file_exists($directorioDestino)) {
    mkdir($directorioDestino, 0777, true);
}
if (isset($_FILES['ficheros']) && is_array($_FILES['ficheros']['name'])) {
    $totalArchivos = count($_FILES['ficheros']['name']);
    for ($i = 0; $i < $totalArchivos; $i++) {
        $nombreOriginal = $_FILES['ficheros']['name'][$i];
        $ficheroTemporal = $_FILES['ficheros']['tmp_name'][$i];
        $codigoError = $_FILES['ficheros']['error'][$i];
        if ($codigoError === UPLOAD_ERR_OK) {
            $nombreLimpio = basename($nombreOriginal);
            $rutaFinal = $directorioDestino . $nombreLimpio;
            if (move_uploaded_file($ficheroTemporal, $rutaFinal)) {
                echo "Archivo '$nombreLimpio' subido con éxito.<br>";
                echo "<a href='$rutaFinal'>Ver archivo</a><br>";
                $extension = strtolower(pathinfo($nombreLimpio, PATHINFO_EXTENSION));
                if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif', 'webp'))) {
                    echo "<img src='$rutaFinal' alt='$nombreLimpio' width='300'><br>";
                }
            } else {
                echo "Error al mover el archivo '$nombreLimpio'.<br>";
            }
        } else {
            if ($codigoError !== UPLOAD_ERR_NO_FILE) {
                echo "Error en el archivo #$i ('$nombreOriginal'): Código de error $codigoError.<br>";
            }
        }
    }
} else {
    echo "No se ha seleccionado ningún archivo.";
}
?>
