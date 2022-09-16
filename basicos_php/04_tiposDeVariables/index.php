<?php

    echo '<h2>TIPOS DE DATOS: (débilmente tipado)</h2>';
        echo '<ul>'
            .'<li>Entero (int/integer) = 99</li>'
            .'<li>Decimal (float/double) = 3.45</li>'
            .'<li>Cadena (String) = "Hola"</li>'
            .'<li>Booleano (Boolean) = true, false</li>'
            .'<li>null</li>'
            .'<li>Array (Colección de datos)</li>'
            .'<li>Objetos</li>'    
            . '</ul>';
            
            
    echo 'para saber el tipo de una variable usamos el comando gettype($nombrevariable)<br>';
    echo 'ej: defino number como 3.45 y aplicamos despues un gettype number<br>';
    
    //comillas dobles siempre son más lentas que las simples, mejor concatenar ''.''
        /*
         * es mejor $texto='soy un texto'.$number;
         * que esto $texto="soy un texto $number";
         */
    
    //TIPO
    $number = 3.45;
    echo gettype($number);
    
    //DEBUG
    echo '<br><br> con el comando var_dump($nombrevariable) nos muestra la info de la variable en ese momento';
    echo '<br>';
    var_dump($number);
    
    echo '<br><br>';
    $nombres[]='Jorge';
    $nombres[]='Andrea';
    var_dump($nombres);
    
    //SALTO DE LINEA /n solo aplica en consola. /t (tab) también aplica solo en consola
    //PRINTEAR COMILLAS /"

?>