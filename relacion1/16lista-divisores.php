<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula y muestra los divisores de un número.</title>
    <style>
        b {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Calcula y muestra los divisores de un número.</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $num = 10;
    echo "<h3>Divisores del numero $num</h3>";
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            
            echo "<b>$i</b>";
        } else {
            echo "$i";
        }
    }
    ?>
</body>

</html>