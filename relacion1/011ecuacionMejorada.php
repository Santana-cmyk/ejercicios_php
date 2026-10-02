<!-- Nombre: Daniel Santana Bueno
  Curso: 2ºDAW
  Ejercicio: 11 - Ecuación de segundo grado mejorada
  Descripción: Mejora el intento anterior para que si alguno de los coeficientes a, b o c
                fuera 0, el programa gestione el cálculo de resultados de manera más
                adecuada:
                ● Si a=0, la ecuación no es de segundo grado, solo hay una raíz:
                x =-c/b
                ● Si b=0, las raíces se calculan de manera más sencilla:
                x1=-sqrt(-c/a) y x2=sqrt(-c/a)
                ● Si c=0, las raíces son, sacando factor común: x(ax+b)=0:
                x1=0 y x2=-b/a
                Aparte de esta casuística, hay que evitar dividir por cero…. Resuelve toda estas
                posibilidades y refactoriza el código para que sea limpio y óptimo -->



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuación de segundo grado mejorada</title>
</head>

<body>
    <h1>Ecuación de segundo grado mejorada</h1>
    <h2>Daniel Santana Bueno</h2>
    <?php
    $a = 3;
    $b = 0;
    $c = 15;

    echo "<p>Ecuación: ({$a})x² + ({$b})x + ({$c}) = 0</p>";

    $discriminante = $b * $b - 4 * $a * $c;

    if ($a == 0) {
        // No es de segundo grado: se comprueba si es de primer grado
        if ($b == 0) {
            echo "<p>La ecuación no tiene solución lógica.</p>";
        } else {
            $x = -$c / $b;   // bx + c = 0  ->  x = -c / b
            echo "<p>La ecuación es de primer grado y su solución es: x = $x</p>";
        }
    } else {
        if ($discriminante > 0) {
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
            echo "<p>La ecuación tiene dos soluciones reales: x1 = $x1 y x2 = $x2</p>";
        } elseif ($discriminante == 0) {
            $x = -$b / (2 * $a);
            echo "<p>La ecuación tiene una solución real: x = $x</p>";
        } else {
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        }
    }
    ?>
</body>

</html>