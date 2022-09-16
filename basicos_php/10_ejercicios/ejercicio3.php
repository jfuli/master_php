<?php

/*
 * EJERCICIO 3
 * Escribir un programa que imprima por pantalla los cuadrados de los 
 * 40 primeros números naturales. CON BUCLE WHILE
 */


$numero=0;

while($numero <=40) {
    echo $numero*$numero.' - ';
    $numero++;
}

echo '<hr>';
/*
 * ahora con FOR
 */

for($i=0; $i<=40; $i++) {
    echo $i*$i.' - ';
}