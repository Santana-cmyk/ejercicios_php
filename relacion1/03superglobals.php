<?php
/*
 * Nombre: Daniel Santana Bueno
 * Curso: 2ºDAW
 * Ejercicio: 3 - Superglobals ($_SERVER)
 * Descripción: Muestra información del servidor y de la petición usando la
 *              variable superglobal $_SERVER: primero una lista con los
 *              valores más importantes y luego un volcado completo con
 *              var_dump() y print_r().
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3: Superglobals</title>
    <style>
        b {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Con comillas simples PHP no sustituye $_SERVER, lo escribe tal cual -->
    <h1><?php echo 'Valores de $_SERVER'; ?></h1>
    <ul>
        <?php 
            echo "<li><b>Document-root: </b>" . $_SERVER['DOCUMENT_ROOT'] . "</li>"; 
            echo "<li><b>PHP-SELF: </b>" . $_SERVER['PHP_SELF'] . "</li>";
            echo "<li><b>SERVER-NAME: </b>" . $_SERVER['SERVER_NAME'] . "</li>"; 
            echo "<li><b>SERVER-SOFTWARE: </b>" . $_SERVER['SERVER_SOFTWARE'] . "</li>"; 
            echo "<li><b>SERVER_PROTOCOL: </b>" . $_SERVER['SERVER_PROTOCOL'] . "</li>"; 
            echo "<li><b>HTTP_USER_AGENT: </b>" . $_SERVER['HTTP_USER_AGENT'] . "</li>"; 
            echo "<li><b>HTTP_HOST: </b>" . $_SERVER['HTTP_HOST'] . "</li>"; 
            echo "<li><b>REMOTE_ADDR: </b>" . $_SERVER['REMOTE_ADDR'] . "</li>"; 
            echo "<li><b>REMOTE_PORT: </b>" . $_SERVER['REMOTE_PORT'] . "</li>"; 
            echo "<li><b>SCRIPT_FILENAME: </b>" . $_SERVER['SCRIPT_FILENAME'] . "</li>"; 
            echo "<li><b>REQUEST_URI: </b>" . $_SERVER['REQUEST_URI'] . "</li>"; 
        ?>
    </ul>

    <h2>Volcado con var_dump()</h2>
    <!-- <pre> respeta los saltos de línea y hace el volcado legible -->
    <pre><?php var_dump($_SERVER); ?></pre>

    <h2>Volcado con print_r()</h2>
    <pre><?php print_r($_SERVER); ?></pre>
</body>

</html>