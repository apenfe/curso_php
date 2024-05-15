<!doctype html>

<html>
    <head>
        <meta charset="utf=8">
        <title>Documento sin titulo</title>
    </head>

    <body>

        <?php

        $nombre = "Juan";

        function dameNombre(){
            global $nombre;

            $nombre = "mi nombre es ". $nombre;
        }

        dameNombre();
        echo $nombre ;

        ?>

    </body>
</html>