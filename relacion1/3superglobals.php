<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2: Superglobals</title> 
    <style>
        b {
            color: red;

        }
    </style>
</head>
<body>
    <h1><?php echo 'Valores de $_SERVER'?></h1>
    <ul>
        <?php 
            echo "<li><b>Document-root: </b>" . $_SERVER['DOCUMENT_ROOT'] . "</li>"; 
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

    <!-- Volcado con var_dump --> 
    <?php var_dump($_SERVER); ?>
    <br><br><br>
    <!-- Volcado con print_r() -->
     <?php print_r($_SERVER); ?>
</body>
</html>