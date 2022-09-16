<?php

/*
 * VARIABLES LOCALES: se definen dentro de una funció
 *  sólo están disponibles dentro de la función.
 * VARIABLES GLOBALES: se declaran fuera de una función
 *  y están disponibles dentro y fuera de las funciones.
 */

$frase='Ni los genios son tan genios ni los mediocres tan mediocres';//global
echo $frase;

echo '<br>';

function holaMundo() {
    global $frase;
    
    $year=2021;                 //local
    
    $resultado= $frase.$year;
    return $resultado;
}

echo holaMundo();

echo '<hr>';
/*
 * FUNCIONES VARIABLES
 */

function buenasDias() {
    return 'Hola! buenos dias';
}

function buenasTardes() {
    return '¿Has comido bien';
}

function buenasNoches() {
    return 'Que descanses';
}

$horario = 'Noches';
//Se puede hacer con: $horario = $_GET['horario'];

$miFuncion = 'buenas'.$horario; //esto imprime= Que descanses.
echo $miFuncion();
