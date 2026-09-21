<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi hola mundo en php</title>
</head>
<body>
    <!-- hello world como texto básico --> 
    <?php echo 'Hello world'; ?>

    <!-- hello world como encabezado de nivel 2 --> 
    <h2><?php echo 'Hello world'; ?></h2>

    <!-- hello world como parrafo con estilos --> 
    <p style="color:blue; font-family:'Courier New',
     Courier, monospace; text-align:center "><?php echo 'Hello world'; ?></p>

    <!-- hello world con salto de línea entre hello y world --> 
    <p><?php echo 'Hello<br>world';?></p>

    <!-- hello world con la info de instalación de PHP --> 
    <?php echo 'Hello world '; echo "Versión de PHP: ". 
    phpversion() .  phpinfo()?>

    <!-- hello world con la fecha y hora del sistema --> 
    <?php echo date("l jS \of F Y h:i:s A");?>
    
</body>
</html>