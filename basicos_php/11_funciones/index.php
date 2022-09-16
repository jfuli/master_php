<?php

/*
 * FUNCIONES: conjuntos de órdenes agrupados por un nombre concreto.
 * Y puede reutilizarse invocando a la función.
 */

/*
 * ejemplo1
 * FUNCION SIN PARAMETROS EXTERNOS
 */
function muestraNombres() {
    echo 'Jorge <br>';
    echo 'Andrea <br>';
    echo 'Cris <br>';
    echo 'Luci <br>';
}
muestraNombres();

echo '<hr>';
/*
 * ejemplo2
 * FUNCION CON PARAMETROS EXTERNOS
 */

function pof($parametro) {
    var_dump($parametro);
}

pof(55);

echo '<hr>';
/*
 * ejemplo3 y 4 
 * FUNCION Y FUNCION CON GET
 */

function tabla($numero) {
    echo '<h3>Tabla de multiplicar del numero: '.$numero.'</h3>';
    for($i=1;$i<=10;$i++) {
        $resultado=$numero*$i;
        echo "$numero x $i = $resultado <br>";
    }
}
 
tabla(7);

function tablaGet($numero) {
    echo '<h3>Tabla de multiplicar del numero: '.$numero.'</h3>';
    for($i=1;$i<=10;$i++) {
        $resultado=$numero*$i;
        echo "$numero x $i = $resultado <br>";
    }
}

if(isset($_GET['numero'])) {
    tablaGet($_GET['numero']);
}else{
    echo 'No hay número para hacer la tabla';
}

echo '<hr>';
/*
 * ejemplo 5
 * CALCULADORA
 */

function calculadora($numero1, $numero2) {
    $suma = $numero1 + $numero2;
    $resta =$numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multi <br>";
    echo "División; $div <br>";
    echo '<hr>';
}

calculadora(10,30);
calculadora(10,2);
