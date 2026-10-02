<!--

 Nombre: Daniel Santana Bueno
 Curso: 2ºDAW
 Ejercicio: 4 - Array constante
 Descripción:  En un programa PHP, declara un array constante en el que se almacenarán
                los días de la semana. Muestra por pantalla:
                ● el primer dia de la semana
                ● todos los días secuencialmente
                ● lo mismo que el anterior, pero en formato de lista numerada
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array constante de días de la semana</title>
</head>

<body>
    <h2>Manejo de arrays constantes: días de la semana</h2>

    <?php
    // define() crea una constante. Su valor no puede cambiar después.
    define("DIAS_SEMANA", [
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    ]);

    // Acceso a un elemento por su posición (empieza en 0)
    echo "<p>El primer día de la semana es: " . DIAS_SEMANA[0] . "</p>";

    // Recorrido con for: count() devuelve el número de elementos
    for ($i = 0; $i < count(DIAS_SEMANA); $i++) {
        echo DIAS_SEMANA[$i] . "<br>";
    }

    // Mismo recorrido, pero en una lista numerada (<ol>)
    echo "<ol>";
    for ($i = 0; $i < count(DIAS_SEMANA); $i++) {
        echo "<li>" . DIAS_SEMANA[$i] . "</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>