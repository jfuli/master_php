<?php

$color='rojo';

if($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'El color NO es rojo';
}
    echo '<hr>';
    echo '<br>';

/*
 * OPERADORES DE COMPARACION
 * == igual
 * === idéntico, mismo tipo de dato
 * != diferente
 * <> diferente
 * !== no idéntico
 * < menor que
 * > mayor que
 * <= menor o igual a 
 * >= mayor o igual a
 */

//EJEMPLO ELSE IF
$year=2021;

if($year==2021) {
    echo 'Estamos en 2021';
}else if($year < 2021) {
    echo 'menos de 2021';
}else {
    echo 'mas de 2021';
}
    echo '<hr>';
    echo '<br>';
    
//EJEMPLO IF ANIDADOS
    $nombre='Pepe';
    $ciudad='Madrid';
    $continente='Europa';
    $edad=49;
    $mayoria_edad=18;
    
    if($edad >= $mayoria_edad) {
        echo "<h1>$nombre es mayor de edad </h1>";
        if($continente == 'Europa') {
            echo 'Y es de '.$ciudad;
        }else{
            echo 'No es Europeo';
        }
    }else{
        echo $nombre.'NO es mayor de edad';
    }
    echo '<hr>';
    echo '<br>';
    
/*
 * OPERADORES LÓGICOS:
 * && AND
 * || OR
 * ! NOT
 */
//EJEMPLO MULTIPLES CONDICIONES: OPERADOR LÓGICO
    $edad1=18;
    $edad2=64;
    $edad_persona=20;
    
    if($edad_persona >= $edad1 && $edad_persona <= $edad2) {
        echo 'ESTÁ EN EDAD DE TRABAJAR';
    }else{
        echo 'NO ESTÁ EN EDAD DE TRABAJAR';
    }
    echo '<hr>';
    echo '<br>';
    
/*
 * SWITCH
 */
    $dia=4;
    
    switch($dia) {
        case 1:
            echo 'lunes';
            break;
        case 2:
            echo 'martes';
            break;
        case 3:
            echo 'miercoles';
            break;
        case 4:
            echo 'jueves';
            break;
        case 5:
            echo 'viernes';
            break;
        default:
            echo 'FIN DE SEMANA';
    }
    echo '<hr>';
    echo '<br>';
    
/*
 * GOTO (estructura de control)
 */
    goto marca; //marca o el nombre que quieras
    echo "<h3>Instrucción 1</h3>";
    echo "<h3>Instrucción 2</h3>";
    echo "<h3>Instrucción 3</h3>";
    echo "<h3>Instrucción 4</h3>";
    
    marca:
        echo 'Me he saltado 4 echos';