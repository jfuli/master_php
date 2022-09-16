<?php

//CONSTANTES. variables que no pueden cambiar. FUNCION: define

    define('nombre','Jorge');
    define('web','www.jorge.com');

//no se pintan con echo $nombre, solo con echo nombre.

    echo nombre;
    
//CONSTANTES PREDEFINIDAS: 'PHP_' y '__' para ver opciones
    echo PHP_EXTENSION_DIR;
    echo __FILE__;
    echo __FUNCTION__;
    
?>

