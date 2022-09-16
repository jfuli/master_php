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

//TRIM: limpia los espacios por delante y por detrás  -- TRIM
$frase='      mi contenido      ';
echo $frase;
var_dump($frase);

$frase2='      mi contenido      ';
var_dump(trim($frase2));
var_dump($frase2);  //OJO que sigue teniendo los espacios.
echo '<hr>';

//Eliminar variables o indices de arrays -- UNSET
$year = 2021;
echo $year;
unset($year);
var_dump($year);
echo '<hr>';

//Comprobar variable vacía, no existe, o su valor es 0, o FALSE  -- EMPTY
$texto='   ';
//$texto= NULL; vacío

if(empty(trim($texto))) { //podemos usar trim y queda vacía
    echo 'La variable texto está vacía';
}else {
    echo'La variable texto tiene contenido';
}
echo '<hr>';

//Contar carácteres de un string -- STRLEN
$cadena = "12345";
echo strlen($cadena); //indica 5
echo '<hr>';

//Encontrar carácter o palabra  --  STRPOS
$frase = 'La vida es bella';
echo strpos($frase, "vida"); //Indica 3, porque empieza tras la 3ªposicion
echo strpos($frase, "b"); //Indica 11, empieza tras el 11º
echo strpos($frase, "34i"); //No devuelve nada, esto es muy util para if existe tal o cual.
echo '<hr>';

//Reemplazar palabras de un string --  STR_REPLACE
$frase = str_replace("vida","moto", $frase);
echo $frase;
echo '<hr>';

//cambiar a mayusculas o minusculas  --  STRTOLOWER, STRTOUPPER
echo strtoupper($frase); echo "<br/>";
echo strtolower($frase);
echo '<hr>';

?>