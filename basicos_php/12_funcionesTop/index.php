<?php

/*
 * CALCULADORA TOP
 */

function calculadora($numero1, $numero2, $negrita = false) {
    $suma = $numero1 + $numero2;
    $resta =$numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    
    if($negrita) { //es lo mismo que: if($negrita == true) o ($negrita != false)
        echo '<h1>';
    }
    
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multi <br>";
    echo "División; $div <br>";
    echo '<hr>';
    
    if($negrita) {
        echo '</h1>';
    }
}

calculadora(10,30);
calculadora(10,2, true);

/*
 * RETURN
 */

function devuelveNombre($nombre) {
    return 'El nombre es '.$nombre;
}

echo devuelveNombre('Jorge Fernández');

echo '<hr>';
/*
 * CALCULADORA TOP RETURN BIEN con parámetro "negrita" no obligatorio
 */

function calculadoraReturn($numero1, $numero2, $negrita = false) {
    $suma = $numero1 + $numero2;
    $resta =$numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    $cadenaTexto='';
    if($negrita) { //es lo mismo que: if($negrita == true) o ($negrita != false)
        $cadenaTexto.= '<h1>';
    }
    
    $cadenaTexto.= "Suma: $suma <br>";
    $cadenaTexto.= "Resta: $resta <br>";
    $cadenaTexto.= "Multiplicación: $multi <br>";
    $cadenaTexto.= "División; $div <br>";
    
    if($negrita) {
        $cadenaTexto.= '</h1>';
    }
    $cadenaTexto.= '<hr>';
    var_dump($cadenaTexto);
    
    return $cadenaTexto;
}

echo calculadoraReturn(10,30);
echo calculadoraReturn(10,2, true);

/*
 * RETURN TOP
 */

function devuelveNombre2($nombre, $apellido) {
    $cadena= 'El nombre es '.$nombre.
            '.<br>
            El apellido es: '.$apellido.'.';
    return $cadena;
}

echo devuelveNombre2('Jorge', 'Fernández');

echo '<hr>';

/*
 * CONCATENAR FUNCIONES
 */

function getNombre($nomb) {
    $texto='El nombre es: '.$nomb;
    return $texto;
}

function devuelveNombre3($nombre, $apellido) {
    $cadena= getNombre($nombre).
            '.<br>
            El apellido es: '.$apellido.'.';
    return $cadena;
}

echo devuelveNombre3('Jorge', 'Fernández');

echo '<hr>';

/*
 * CONCATENAR FUNCIONES x2
 */

function getNombre1($nomb) {
    $texto='El nombre es: '.$nomb;
    return $texto;
}

function getApellido1($apell) {
    $texto='El apellido es: '.$apell;
    return $texto;
}
function devuelveNombre4($nombre, $apellido) {
    $cadena= getNombre($nombre).
            '.<br>'.
            getApellido1($apellido).'.';
    return $cadena;
}

echo devuelveNombre3('Jorge', 'Fernández');

echo '<hr>';