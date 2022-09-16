<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <!--method GET o POST (mejor POST) / action DESTINO-->
        <!--<form method="GET" action="recibir.php">-->
        <form method="POST" action="recibir.php">
            <!-- el name del imput es lo que luego uso. 
            label for="nombre" es buena praxis-->
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"/>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos"/>
            </p>
            
            <input type="submit" value="Enviar datos"/>
        </form>
    </body>    
    
</html>

<?php




?>