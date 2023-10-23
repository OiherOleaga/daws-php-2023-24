<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Escribe una función que reciba como parámetro dos cadenas de texto y
            devuelva la concatenación de dichas cadenas. Muestra el resultado obtenido
            por pantalla.

        </p>
        <?php
        $a = "juan alberto";
        $b = "aaiaosandowowenfwoif";
        $respuesta = concat($a, $b);
        echo ("<p>las dos cadenas unidas son: $respuesta </p>");

        function concat($a, $b)
        {
            $cadenasUnidas = $a . $b;

            return $cadenasUnidas;
        };
        ?>
    </body>

</html>