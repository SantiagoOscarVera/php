<?php
echo "Hola mundo \n"; /* el echo imprime por consola */ /* con la \n hacemos un salto de linea */

$variable1 = "esto es una cadena de texto";
$variable1 = "aca cambio el valor de la variable";
echo $variable1 . "\n"; 

echo gettype($variable1) . "\n" ; /* me dice el tipo de variable */

$variable1 = 6 ;
echo $variable1 . "\n";
echo gettype($variable1) . "\n";

$numero = 7;
$numero = $numero + 4;
echo $numero . "\n";
echo $numero -1 . "\n";
echo $numero . "\n";
echo gettype($numero) . "\n";

$double = 6.5; /* el decimal aca es double en vez de float */
echo gettype($double) . "\n";

echo $double + $numero . "\n";

$bool = true ;
echo $bool . "\n";
echo gettype($bool) . "\n";
$bool = false ; 
echo $bool . "\n"; /* no me imprime nada */
echo gettype($bool) . "\n";

echo "EL VALOR DE MI INTEGER ES $numero y de mi boolean es $bool \n";

const my_constant = "esta es mi constante";
echo my_constant . "\n";

$mi_array = [$bool, $numero, $double];
echo gettype($mi_array) . "\n";
echo $mi_array[1];
echo $mi_array[3];
