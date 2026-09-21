
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
<?php
 $a = true;
 $b = 3;
 $c = 7.5;
 $d = "Dani";

 // Muestra de los tipos de datos con var_dump
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
?>
<br>
<?php
// Muestra de los tipos de datos con printf

printf("Tipo booleano: %b ",$a);
printf("Tipo entero: %u ",$b);
printf("Tipo decimal: %f ",$c);
printf("Tipo cadena: %s ",$d);
?>
</body>
</html>
