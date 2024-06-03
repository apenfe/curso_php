<html>

    <head>

        <title>Ejemplo 7 (arrays)</title>

    </head>

    <body>

        <?php

        function mostrarArray($personas) {
            $texto = "<h3> listado de las ".count($personas)." personas.</h3>";

            $texto.= "<ul>";

            for ($i = 0; $i < count($personas); $i++) {
                $texto .= "<li>".$personas[$i]."</li>";
            }

            $texto.= "</ul>";
            return $texto;
        }

        $personas = array("David","Adrian","Maria","Daniel","Raul");

        echo mostrarArray($personas);

        ?>

    </body>

</html>
