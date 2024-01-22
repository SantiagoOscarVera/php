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
echo $mi_array[1] . "\n";
array_push($mi_array,$variable1); /* agregamos un valor mass a la lista */
print_r ($mi_array) . "\n"; /* imprimimos el array o lista */

/* diccionario */

$mi_dict = array("string" => $variable1, "int" => $numero, "bool" => $bool);
echo gettype($mi_dict) . "\n";
echo $mi_dict["int"] . "\n";

/* set */
array_push($mi_array,"Brais");
array_push($mi_array,"Brais");
print_r($mi_array);
print_r(array_unique($mi_array)); /* te deja unicamente valores unicos */

/* flujos */
for( $index = 0; $index <= 10; $index++ ) { /* recorrer un indice */
    echo $index . "\n";
} 

foreach ($mi_array as $my_item){ /* sirve para iterar un array */
    echo $my_item . "\n";
} 

$index = 0;

while ($index <= sizeof($mi_array) -1) {  /* el sizeof te indica la longuitud del array, por ende aca es "hasta que sea meno o igual al array", hay que darle un lugar menos con el -1 */
    echo $mi_array[$index] . "\n";
    $index++;
}

/* condicional */

$numero = 13;
$variable1 = "haasola";

if ($numero = 11 && $variable1 == "hola") {
    echo "Este numero es 11\n";
} elseif ($numero = 12 || $variable1 == "hola") {
    echo "El numero es 12\n";
} else {
    echo "El numero NO es 11";
}

/* funciones */

function print_number($my_number) {
    echo $my_number . "\n";
}

print_number(2);
print_number(3);
print_number(4);

/* clases */

class MyClass {
    public $name;
    public $age;

    function __construct($name, $age){ /* clave ponerle el construct */
        $this-> name = $name;
        $this-> age = $age;
    }
}

$my_class = new MyClass("Sanchiago", 29);

print_r($my_class);