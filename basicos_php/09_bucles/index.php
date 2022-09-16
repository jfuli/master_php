<?php

/*
 * WHILE- ISSET - CASTEO - DO WHILE - FOR
 */
/*
 * WHILE
 * estructura de control
 */

$numero=0;

while($numero<=100) {
    echo $numero;
    if($numero!=100) {
        echo ',';
    }
    $numero++;
}

echo '<hr>';
/*
 * EJEMPLO
 * isset = si existe
 * esta función hace, que si existe un numero pasado por GET lo declare como $numero
 * y si no, le asigna a $numero = 1
//hay que pasar el parámetro numero en la barra url 09_bucles?numero=33
//al ponerlo en la url se pasa como string, así que para asignar a numero un entero
//hay que castearlo (int)
 */

if(isset($_GET['numero'])) {
    $numero=(int)$_GET['numero'];
}else{
    $numero=1;
}
var_dump($numero);

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador=0;
while($contador<=10) {
    echo "$numero x $contador = ".($numero*$contador).'<br>';
    $contador++;
}

echo '<hr>';
/*
 * DO WHILE
 * si eres menor solo accedes a la sala 1 y si eres mayor a todas.
 */

$edad=18;
$cuenta=1;

do {
    echo 'Tienes acceso a la sala: '.$cuenta;
    $cuenta++;
}while($edad >= 18 && $cuenta <=10);

echo '<hr>';
/*
 * FOR
 * vamos a sumar todos los números del 1 al 100
 */

$resultado=0;

for($i=0; $i<=100;$i++) {
    $resultado=$resultado+$i;
    echo $resultado.',';
}
echo "El resultado de sumar todos los nímeros del 1 al 100 es $resultado.";

//ejemplo la tabla de multiplicar pero con el FOR

if(isset($_GET['numero'])) {
    $numero=(int)$_GET['numero'];
}else{
    $numero=1;
}
var_dump($numero);

echo "<h1>Tabla de multiplicar del número $numero</h1>";


for($contador=0; $contador<=10; $contador++) {
    echo "$numero x $contador = ".($numero*$contador).'<br>';
}

echo '<hr>';

//ejemplo la tabla de multiplicar pero con el FOR
//añadimos un break para que no muestre la tabla del 2
//http://localhost/PROYECTOS/master_php/aprendiendo_php/09_bucles/?numero=2

if(isset($_GET['numero'])) {
    $numero=(int)$_GET['numero'];
}else{
    $numero=1;
}
var_dump($numero);

echo "<h1>Tabla de multiplicar del número $numero</h1>";


for($contador=0; $contador<=10; $contador++) {
    if($numero==2) {
        echo 'La tabla del 2 está prohibido mostrarla';
        break;
    }
    
    echo "$numero x $contador = ".($numero*$contador).'<br>';
}

echo '<hr>';