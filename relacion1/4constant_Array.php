<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array constante de dias de la semana</title>
</head>
<body>
    <h2>Manejo de array constantes de días de la semana</h2>

    <?php
        define("DIAS_SEMANA", ["Lunes", 
                                "Martes", 
                                "Miércoles", 
                                "Jueves", 
                                "Viernes", 
                                "Sábado", 
                                "Domingo"]);
        echo "<p>El primer día de la semana es: " . DIAS_SEMANA[0] . "</p>";

        for($i = 0; $i < count(DIAS_SEMANA); $i++) {
            echo DIAS_SEMANA[$i] . "<br>";
        }

        echo "<ol>";
         for($i = 0; $i < count(DIAS_SEMANA); $i++) {
            echo "<li>" . DIAS_SEMANA[$i] . "</li>";
        }
        echo "</ol>";
    ?>

</body>
</html>


