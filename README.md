# 🐘 Ejercicios de PHP

Colección de ejercicios prácticos de **PHP** realizados durante el curso de **2º DAW** (Desarrollo de Aplicaciones Web). Cada script es independiente y se centra en un concepto básico del lenguaje: sintaxis, tipos de datos, arrays, estructuras de control, bucles y algoritmos matemáticos sencillos.

**Autor:** Daniel Santana Bueno

---

## 📁 Estructura del repositorio

```
ejercicios_php/
└── relacion1/
    ├── 00hola_mundo.php
    ├── 01hola_mundo.php
    ├── 02tipos_datos.php
    ├── ...
    └── 020conversor-bases.php
```

Los ejercicios se organizan en **relaciones** (carpetas):

| Carpeta | Contenido | Estado |
|---------|-----------|--------|
| `relacion1/` | Fundamentos de PHP: salida por pantalla, variables, arrays, condicionales y bucles | ✅ Completada |

---

## 📚 Índice de ejercicios — Relación 1

### Fundamentos y tipos de datos

| Nº | Archivo | Descripción |
|----|---------|-------------|
| 0 | `00hola_mundo.php` | Hola mundo mínimo: `echo`, `phpversion()` y `phpinfo()` |
| 1 | `01hola_mundo.php` | "Hello world" de varias formas mezclando PHP y HTML: texto simple, encabezado `<h2>`, párrafo con estilos, salto de línea, versión de PHP, fecha y hora con `date()` y `phpinfo()` |
| 2 | `02tipos_datos.php` | Tipos de datos escalares (`bool`, `int`, `float`, `string`) mostrados con `var_dump()` y `printf()` |
| 3 | `03superglobals.php` | Superglobal `$_SERVER`: lista con los valores más importantes y volcado completo con `var_dump()` y `print_r()` |

### Arrays

| Nº | Archivo | Descripción |
|----|---------|-------------|
| 4 | `04constant_Array.php` | Array constante (`define()`) con los días de la semana: primer día, recorrido secuencial y lista numerada `<ol>` |
| 5 | `05asociativo_Array.php` | Array asociativo constante (temperaturas por día) mostrado como texto, lista con viñetas, lista numerada y tabla |

### Estructuras condicionales

| Nº | Archivo | Descripción |
|----|---------|-------------|
| 7 | `07bifurcaciones.php` | `if / else`: nota final a partir de la media de dos notas con penalización de 0,25 por falta |
| 8 | `08rubrica-calificaciones.php` | Dos arrays asociativos paralelos (rúbrica con pesos y notas) para calcular una nota final ponderada |
| 9 | `09condicionales-anidadas.php` | Condicionales anidadas: validación de los lados y clasificación del triángulo (equilátero, isósceles o escaleno) |
| 10 | `010ecuacion2grado.php` | Ecuación de segundo grado con el discriminante (dos soluciones, una doble o sin solución real) |
| 11 | `011ecuacionMejorada.php` | Versión mejorada que gestiona el caso `a = 0` (ecuación de primer grado) y evita divisiones por cero |
| 12 | `012switch.php` | `switch`: conversión de una nota numérica a calificación (Suspenso, Suficiente, Bien, Notable, Sobresaliente) |

### Bucles y algoritmos

| Nº | Archivo | Descripción |
|----|---------|-------------|
| 13 | `013factorial.php` | Factorial de un número mostrando los resultados parciales de cada paso |
| 14 | `014sumaNaturales.php` | Suma de los *n* primeros naturales calculada con la fórmula de Gauss y con un bucle |
| 15 | `015numeroPrimo.php` | Comprobación de si un número es primo (probando divisores hasta su raíz cuadrada) |
| 16 | `016lista-divisores.php` | Muestra todos los números probados y resalta en verde los divisores |
| 17 | `017divisionConEuclides.php` | División entera (cociente y resto) mediante restas sucesivas, con comprobación del resultado |
| 18 | `018mcdEuclides.php` | Máximo común divisor con el algoritmo de Euclides |
| 19 | `019binarioaNatural.php` | Conversión de un número decimal a binario mediante divisiones sucesivas entre 2 |
| 20 | `020conversor-bases.php` | Conversor de bases: de binario a decimal, y de decimal a hexadecimal y octal (`dechex()`, `decoct()`) |

> **Nota:** el ejercicio 6 no está incluido en el repositorio.

---

## 🛠️ Requisitos

- **PHP 7.4 o superior** (recomendado PHP 8.x)
- Un servidor web local **o** el servidor integrado de PHP

Opciones de entorno:

- [XAMPP](https://www.apachefriends.org/) / [WAMP](https://www.wampserver.com/) / [Laragon](https://laragon.org/)
- PHP instalado directamente en el sistema

---

## ▶️ Cómo ejecutar los ejercicios

### 1. Clonar el repositorio

```bash
git clone https://github.com/Santana-cmyk/ejercicios_php.git
cd ejercicios_php
```

### 2. Opción A: servidor integrado de PHP

```bash
php -S localhost:8000
```

Después, abre en el navegador, por ejemplo:

```
http://localhost:8000/relacion1/013factorial.php
```

### 3. Opción B: XAMPP / WAMP / Laragon

Copia la carpeta del proyecto dentro del directorio público del servidor (`htdocs` en XAMPP, `www` en WAMP/Laragon) y accede desde:

```
http://localhost/ejercicios_php/relacion1/
```

### 4. Opción C: línea de comandos

Algunos scripts pueden ejecutarse directamente, aunque la salida contendrá etiquetas HTML:

```bash
php relacion1/018mcdEuclides.php
```

> ⚠️ `03superglobals.php` usa `$_SERVER` (por ejemplo `HTTP_USER_AGENT` o `REMOTE_ADDR`), por lo que debe ejecutarse a través de un servidor web.

---

## 💡 Conceptos practicados

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

## 📝 Convenciones

- Cada archivo empieza con una cabecera con el nombre del autor, el curso, el número de ejercicio y el enunciado.
- Los datos de entrada están definidos como variables dentro del propio script, de modo que basta con modificarlos para probar otros casos.

---

## 📄 Licencia

Este repositorio tiene fines **educativos**. Siéntete libre de consultarlo como referencia.
