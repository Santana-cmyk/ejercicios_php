<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
</head>
<body>
    <?php
     const ARRAY_ASOCIATIIVO = [
        "Lunes" => 25,
        "Martes" => 30,
        "Miércoles" => 35,
        "Jueves" => 40,
        "Viernes" => 45,
        "Sábado" => 50,
        "Domingo" => 55
      ];
    ?>

    <!-- Temperatura del primer día de la semana: -->
    
    <?php echo "<p>Temperatura del Lunes: " . ARRAY_ASOCIATIIVO["Lunes"] . "°C</p>"; ?>
    
    <!-- Temperatura de todos los días de la semana: -->
    <ul>
        <?php 
            foreach(ARRAY_ASOCIATIIVO as $dia => $temperatura) {
                echo "<li>Temperatura del " . $dia . ": " . $temperatura . "°C</li>";
            }
        ?>
    </ul>

    <!-- Temperatura de todos los dias en lista numerada -->
    <ol>
        <?php 
            foreach(ARRAY_ASOCIATIIVO as $dia => $temperatura) {
                echo "<li>Temperatura del " . $dia . ": " . $temperatura . "°C</li>";
            }
        ?>
    </ol>

    <!-- Lo mismo en forma de tabla -->
    <table border="1">
        <tr>
            <th>Día</th>
            <th>Temperatura (°C)</th>
        </tr>
        <?php 
            foreach(ARRAY_ASOCIATIIVO as $dia => $temperatura) {
                echo "<tr><td>" . $dia . "</td><td>" . $temperatura . "</td></tr>";
            }
        ?>
    </table>
</body>
</html>