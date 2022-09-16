<?php

/*
 * FUNCIONES PREDEFINIDAS 1ªparte
 */

//debuggear
$nombre='Jorge;';
var_dump($nombre);
echo '<hr>';

//fechas (hay muchas) php manual ej. google: funcion date php
echo date('d-m-y');
echo '<br>';
echo date('D-M-Y');
echo '<br>';
echo time();
echo '<hr>';

//Matemáticas (buscar en manual)
echo 'Raíz cuadrada de 10: '.sqrt(10);
echo '<br>';
echo 'Número aleatorio entre 10 y 50: '.rand(10,40); //si lo dejas vacio da al azar.
echo '<br>';
echo 'Número Pi: '.pi();
echo '<br>';
echo 'Redondeo'.round(7.878218, 2);
echo '<hr>';

/*
 * MAS FUNCIONES GENERALES
 */

//sacar tipo
echo gettype($nombre);
echo '<hr>';

//si es. hay muchos: is_float is_string etc...
if(is_string($nombre)) {
    echo 'esa variable es string';
}
echo '<br>';
if(!is_float($nombre)) {
    echo 'esa variable no es numero con decimales';
}
echo '<hr>';

//comprobar si existe: ISSET
if(isset($edad)) {
    echo 'edad existe';
}else{
    echo'edad no existe';
}
echo '<hr>';

//TRIM: limpia los espacios por delante y por detrás
$frase='      mi contenido      ';
echo $frase;
var_dump($frase);

$frase2='      mi contenido      ';
var_dump(trim($frase2));
var_dump($frase2);  //OJO que sigue teniendo los espacios.
echo '<hr>';

//Eliminar variables o indices de arrays
$year = 2021;
echo $year;
unset($year);
var_dump($year);
echo '<hr>';

//comprobar variable vacía, no existe, o su valor es 0.
//EMPTY
$texto='   ';

if(empty(trim($texto))) { //podemos usar trim y queda vacía
    echo 'La variable texto está vacía';
}else {
    echo'La variable texto tiene contenido';
}
echo '<hr>';