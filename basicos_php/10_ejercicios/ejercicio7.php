<?php


/*
 * EJERCICIO 7 (es continuación del ejercicio 5)
 * Muestra todos los números entre dos números IMPARES que nos lleguen por url ($_GET)
 */



if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    if($numero1<$numero2) {
        for($i=$numero1;$i<=$numero2;$i++) {
            if($i%2!=0){
            echo 'Los numeros impares entre n1 y n2 son: '.$i.' - ';
            }
        }
    }else {
        echo 'El numero1 tiene que ser menor a numero2';
    }
}else {
    echo 'Introduce los parámetros por url';
}