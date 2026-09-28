<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <h1>Bifurcación mediante Switch</h1>
    <h2>Daniel Santana Bueno</h2>

    <?php
    $nota =  5;
    echo "Nota en la variable: $nota";

    switch ($nota) {
        case $nota >= 0 && $nota <= 4:
            echo "<p>Suspenso</p>";
            break;

        case 5:
            echo "<p>Suficiente</p>";
            break;

        case 6:
            echo "<p>Bien</p>";

            break;

        case $nota >= 7 && $nota <= 8:
            echo "<p>Notable</p>";
            break;

        case $nota >= 9 && $nota <= 10:
            echo "<p>Sobresaliente</p>";
            break;
        default:
            echo "Esta nota no es válida";
    }
    ?>
</body>

</html>