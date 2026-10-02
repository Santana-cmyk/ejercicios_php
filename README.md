#  Ejercicios de  ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)



Colección de ejercicios prácticos de **PHP** realizados durante el curso de **2º DAW** (Desarrollo de Aplicaciones Web). Cada script es independiente y se centra en un concepto básico del lenguaje: sintaxis, tipos de datos, arrays, estructuras de control, bucles y algoritmos matemáticos sencillos.

**Autor:** Daniel Santana Bueno

---

##  Estructura del repositorio

<!DOCTYPE html> <html lang="es"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Índice de ejercicios — Relación 1</title> </head> <body>
<h1>Los ejercicios se organizan en <strong>relaciones</strong> (carpetas)</h1>

<table>
    <thead>
        <tr>
            <th>Carpeta</th>
            <th>Contenido</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>relacion1/</code></td>
            <td>Fundamentos de PHP: salida por pantalla, variables, arrays, condicionales y bucles</td>
            <td>✅ Completada</td>
        </tr>
    </tbody>
</table>

<h2> Índice de ejercicios — Relación 1</h2>

<h3>Fundamentos y tipos de datos</h3>

<table>
    <thead>
        <tr>
            <th>Nº</th>
            <th>Archivo</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td><code>00hola_mundo.php</code></td>
            <td>Hola mundo mínimo: <code>echo</code>, <code>phpversion()</code> y <code>phpinfo()</code></td>
        </tr>
        <tr>
            <td>1</td>
            <td><code>01hola_mundo.php</code></td>
            <td>"Hello world" de varias formas mezclando PHP y HTML: texto simple, encabezado <code>&lt;h2&gt;</code>, párrafo con estilos, salto de línea, versión de PHP, fecha y hora con <code>date()</code> y <code>phpinfo()</code></td>
        </tr>
        <tr>
            <td>2</td>
            <td><code>02tipos_datos.php</code></td>
            <td>Tipos de datos escalares (<code>bool</code>, <code>int</code>, <code>float</code>, <code>string</code>) mostrados con <code>var_dump()</code> y <code>printf()</code></td>
        </tr>
        <tr>
            <td>3</td>
            <td><code>03superglobals.php</code></td>
            <td>Superglobal <code>$_SERVER</code>: lista con los valores más importantes y volcado completo con <code>var_dump()</code> y <code>print_r()</code></td>
        </tr>
    </tbody>
</table>

<h3>Arrays</h3>

<table>
    <thead>
        <tr>
            <th>Nº</th>
            <th>Archivo</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>4</td>
            <td><code>04constant_Array.php</code></td>
            <td>Array constante (<code>define()</code>) con los días de la semana: primer día, recorrido secuencial y lista numerada <code>&lt;ol&gt;</code></td>
        </tr>
        <tr>
            <td>5</td>
            <td><code>05asociativo_Array.php</code></td>
            <td>Array asociativo constante (temperaturas por día) mostrado como texto, lista con viñetas, lista numerada y tabla</td>
        </tr>
    </tbody>
</table>

<h3>Estructuras condicionales</h3>

<table>
    <thead>
        <tr>
            <th>Nº</th>
            <th>Archivo</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>7</td>
            <td><code>07bifurcaciones.php</code></td>
            <td><code>if / else</code>: nota final a partir de la media de dos notas con penalización de 0,25 por falta</td>
        </tr>
        <tr>
            <td>8</td>
            <td><code>08rubrica-calificaciones.php</code></td>
            <td>Dos arrays asociativos paralelos (rúbrica con pesos y notas) para calcular una nota final ponderada</td>
        </tr>
        <tr>
            <td>9</td>
            <td><code>09condicionales-anidadas.php</code></td>
            <td>Condicionales anidadas: validación de los lados y clasificación del triángulo (equilátero, isósceles o escaleno)</td>
        </tr>
        <tr>
            <td>10</td>
            <td><code>010ecuacion2grado.php</code></td>
            <td>Ecuación de segundo grado con el discriminante (dos soluciones, una doble o sin solución real)</td>
        </tr>
        <tr>
            <td>11</td>
            <td><code>011ecuacionMejorada.php</code></td>
            <td>Versión mejorada que gestiona el caso <code>a = 0</code> (ecuación de primer grado) y evita divisiones por cero</td>
        </tr>
        <tr>
            <td>12</td>
            <td><code>012switch.php</code></td>
            <td><code>switch</code>: conversión de una nota numérica a calificación (Suspenso, Suficiente, Bien, Notable, Sobresaliente)</td>
        </tr>
    </tbody>
</table>

<h3>Bucles y algoritmos</h3>

<table>
    <thead>
        <tr>
            <th>Nº</th>
            <th>Archivo</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>13</td>
            <td><code>013factorial.php</code></td>
            <td>Factorial de un número mostrando los resultados parciales de cada paso</td>
        </tr>
        <tr>
            <td>14</td>
            <td><code>014sumaNaturales.php</code></td>
            <td>Suma de los <em>n</em> primeros naturales calculada con la fórmula de Gauss y con un bucle</td>
        </tr>
        <tr>
            <td>15</td>
            <td><code>015numeroPrimo.php</code></td>
            <td>Comprobación de si un número es primo (probando divisores hasta su raíz cuadrada)</td>
        </tr>
        <tr>
            <td>16</td>
            <td><code>016lista-divisores.php</code></td>
            <td>Muestra todos los números probados y resalta en verde los divisores</td>
        </tr>
        <tr>
            <td>17</td>
            <td><code>017divisionConEuclides.php</code></td>
            <td>División entera (cociente y resto) mediante restas sucesivas, con comprobación del resultado</td>
        </tr>
        <tr>
            <td>18</td>
            <td><code>018mcdEuclides.php</code></td>
            <td>Máximo común divisor con el algoritmo de Euclides</td>
        </tr>
        <tr>
            <td>19</td>
            <td><code>019binarioaNatural.php</code></td>
            <td>Conversión de un número decimal a binario mediante divisiones sucesivas entre 2</td>
        </tr>
        <tr>
            <td>20</td>
            <td><code>020conversor-bases.php</code></td>
            <td>Conversor de bases: de binario a decimal, y de decimal a hexadecimal y octal (<code>dechex()</code>, <code>decoct()</code>)</td>
        </tr>
    </tbody>
</table>

---

##  Conceptos practicados

- Salida de datos: `echo`, `printf`, `var_dump`, `print_r`
- Variables, constantes (`define`, `const`) y tipos de datos
- Superglobales (`$_SERVER`)
- Arrays indexados y asociativos, recorridos con `for` y `foreach`
- Condicionales: `if / elseif / else` y `switch`
- Bucles: `for` y `while`
- Funciones y operadores matemáticos: `sqrt()`, `pow()`, `intdiv()`, `%`
- Conversión entre bases: `dechex()`, `decoct()`
- Mezcla de **PHP + HTML** en un mismo archivo

---


