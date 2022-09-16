<?php

/*
 * EJERCICIO 4
 * recoger dos números por url (parámetro GET)
 * y hacer todas las operaciones básicas de una calculadora.
 */



if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    echo '<h1>CALCULADORA</h1>';
    echo 'Suma: '.($numero1+$numero2).'<br>';
    echo 'Multiplicación: '.($numero1*$numero2).'<br>';
    echo 'Resta: '.($numero1-$numero2).'<br>';
    echo 'División: '.($numero1/$numero2).'<br>';
    
}else{
    echo 'Introduce correctamente los valores por url';
}

//http://localhost/PROYECTOS/master_php/aprendiendo_php/10_ejercicios/ejercicio4.php?numero1=2&numero2=3
?>
