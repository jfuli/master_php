<?php

/*
 * EJERCICIO 2
 * escribir un script en PHP que nos muestre por pantalla 
 * todos los numeros pares del 1 al 100.
 */

$numero=0;

while ($numero <=98) {
    $numero= $numero +2;
    echo $numero.' - ';
}

echo '<hr>';

for ($i=1; $i<=100; $i++ ) {
    if($i%2==0) { 
        echo $i.' - ';
    }
    
}
