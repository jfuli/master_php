<?php
//Los includes nos permiten tener codigo en un fichero y usarlo en otros tantas veces como queramos
//funciones; para las cabeceras, lógicas o partes que se repitan etc...
include 'includes/cabecera.php';
include_once 'includes/cabecera.php'; //include_once hace que si ya está incluido, no lo vuelva a incluir
// en los casos de include e include_once, si no cargan los archivos que llamamos, la página se sigue ejecutando sin ellos
require 'includes/cabecera.php';
require_once 'includes/cabecera.php';
//si require o require_once no cargan bien, no carga nada, es mejor, más estricto para la mayoría de los casos 
?>

<!-- <!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>INCLUDES en PHP</title>
    </head>
    <body>
        //cabecera
        <div class="cabecera">
            <h1>Includes en PHP</h1>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobremi.php">Sobre mi</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <hr/> -->
        <?php var_dump($color); ?>
        <!--contenido-->
        <div>
            <h2>Esta es la página de inicio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ut fugiat alias asperiores
                 omnis similique consequuntur molestiae corporis magnam esse architecto quaerat,
                  expedita soluta vero deserunt et necessitatibus commodi perferendis.</p>
        </div>
        <hr/> 
        <!--footer-->
        <!-- <footer>
            Todos los derechos reservados &copy; Jorge Fernández
        </footer> -->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>