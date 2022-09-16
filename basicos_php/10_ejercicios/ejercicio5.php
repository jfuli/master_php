<?php


/*
 * EJERCICIO 5
 * Muestra todos los números entre dos números que nos lleguen por url (GET)
 */



if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    if($numero1<$numero2) {
        for($i=$numero1;$i<=$numero2;$i++) {
            echo $i.' - ';
        }
    }else {
        echo 'El numero1 tiene que ser menor a numero2';
    }
}else {
    echo 'Introduce los parámetros por url';
}