<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Modifica la función anterior para que establezca un valor por defecto a una
            de las cadenas.

        </p>
        <?php
        $a = $_GET["cad1"];
        $b = $_GET["cad2"];
        $respuesta = concat($a, $b);
        echo ("<p>las dos cadenas unidas son: $respuesta </p>");

        function concat($a, $b = "me llamo alberto")
        {
            $cadenasUnidas = $a . $b;

            return $cadenasUnidas;
        };
        ?>
    </body>

</html>