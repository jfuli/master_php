<?php

/*
 * EJERCICIO 6
 * Imprimir por pantalla todas las tablas de multiplicar(1-10) en HTML
 */

echo '<table border="1"><tr>'; //inicio de la tabla

echo '<tr>'; //inicio fila 1 de celdas
    for($cabecera=1;$cabecera<=10;$cabecera++) {
        echo '<td>Tabla del '.$cabecera.'</td>';
    }
echo '</tr>'; //cierre fila 1 de celdas
echo '<tr>'; //inicio fila 2 de celdas

    for($i=1;$i<=10;$i++) {
        echo '<td>';
            for($x=1;$x<=10;$x++) {
                echo $i*$x.'<br>';
            }
        echo '</td>';
    }
echo '</tr>'; //cierre fila 2 de celdas

echo '</table>';
    
?>