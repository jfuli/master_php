<?php

//OPERADORES ARITMÉTICOS

$numero1=55;
$numero2=33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
echo 'División: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';


//OPERADORES INCREMENTO Y DECREMENTO
$year=2021;
echo '<br>'.$year ;
$year++;        
echo '<br>'.$year;
$year--;
echo '<br>'.$year;
--$year;
echo '<br>'.$year;
++$year;


//OPERADORES DE ASIGNACIÓN
$edad=55;
echo '<br><br>'.$edad;

echo '<br>'.($edad+=5);
echo '<br>'.($edad/=5);



?>
