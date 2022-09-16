<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>INCLUDES en PHP</title>
    </head>
    <body>
        <?php
        $color = "rojo";  //PODEMOS USAR VARIABLES Y FUNCIONES EN LOS INCLUDES Y USARLAS EN LOS OTROS FICHEROS
        $nombre = "Jorge Fernández"; //color sólo lo uso en un fichero pero nombre lo meto en include del footer para todos 
        ?>
        <!--cabecera-->
        <div class="cabecera">
            <h1>Includes en PHP</h1>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobremi.php">Sobre mi</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <hr/>