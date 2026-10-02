<?php
/*
 * Nombre: Daniel Santana Bueno
 * Curso: 2ºDAW
 * Ejercicio: 1 - Hola mundo con HTML
 * Descripción: Muestra "Hello world" de varias formas para practicar la
 *              mezcla de PHP con HTML: texto simple, encabezado, párrafo con
 *              estilos, salto de línea, versión de PHP, información de la
 *              instalación (phpinfo) y la fecha/hora del sistema.
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi hola mundo en PHP</title>
</head>

<body>
    <!-- Hello world como texto básico -->
    <?php echo 'Hello world'; ?>

    <!-- Hello world como encabezado de nivel 2 -->
    <h2><?php echo 'Hello world'; ?></h2>

    <!-- Hello world como párrafo con estilos en línea -->
    <p style="color: blue; font-family: 'Courier New', Courier, monospace; text-align: center;">
        <?php echo 'Hello world'; ?>
    </p>

    <!-- Hello world con salto de línea entre Hello y world (etiqueta <br>) -->
    <p><?php echo 'Hello<br>world'; ?></p>

    <!-- Hello world con la versión de PHP.
         phpversion() devuelve un texto, por eso se puede concatenar con "." -->
    <p><?php echo 'Hello world. Versión de PHP: ' . phpversion(); ?></p>

    <!-- Fecha y hora del sistema con date() -->
    <p><?php echo date("l jS \of F Y h:i:s A"); ?></p>

    <!-- Información completa de la instalación de PHP.
         phpinfo() imprime directamente una tabla enorme, por eso se llama
         aparte y no dentro de un echo. -->
    <?php phpinfo(); ?>
</body>

</html>