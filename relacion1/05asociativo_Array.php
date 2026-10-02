<!--
 Nombre: Daniel Santana Bueno
 Curso: 2ºDAW
 Ejercicio: 5 - Array asociativo
 Descripción: Crea un array asociativo constante, en el que utilices como clave el día de la
                semana, y como valor, la temperatura máxima de ese día en formato real. A
                continuación, muestra:
                ● la temperatura del primer dia de la semana
                ● la temperatura de todos los días, secuencialmente
                ● lo mismo que el anterior, pero en formato de lista numerada
                ● idem, en forma de tabla
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo</title>
</head>

<body>
    <?php
        const TEMPERATURAS = [
        "Lunes"     => 25,
        "Martes"    => 30,
        "Miércoles" => 35,
        "Jueves"    => 40,
        "Viernes"   => 45,
        "Sábado"    => 50,
        "Domingo"   => 55
    ];
    ?>
    
    <!-- Acceso directo a un elemento usando su clave -->
    <?php echo "<p>Temperatura del Lunes: " . TEMPERATURAS["Lunes"] . "°C</p>"; ?>

    <!-- foreach recorre el array: $dia es la clave y $temperatura el valor -->
    <h3>Lista con viñetas</h3>
    <ul>
        <?php
        foreach (TEMPERATURAS as $dia => $temperatura) {
            echo "<li>Temperatura del $dia: $temperatura °C</li>";
        }
        ?>
    </ul>

    <h3>Lista numerada</h3>
    <ol>
        <?php
        foreach (TEMPERATURAS as $dia => $temperatura) {
            echo "<li>Temperatura del $dia: $temperatura °C</li>";
        }
        ?>
    </ol>

    <h3>Tabla</h3>
    <table border="1">
        <tr>
            <th>Día</th>
            <th>Temperatura (°C)</th>
        </tr>
        <?php
        foreach (TEMPERATURAS as $dia => $temperatura) {
            echo "<tr><td>$dia</td><td>$temperatura</td></tr>";
        }
        ?>
    </table>
</body>

</html>