<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array con 4 nombres de ciudades (Paris, Berlin, Amsterdam, Praga). A
            continuación crea las siguientes funciones:

        </p>
        <?php
        $sitios = ["paris", "italia", "NY", "grecia"];
        getValor($sitios, 0);
        setValor($sitios, 1, "albacete");

        function getValor($sitios, $posicion)
        {
            echo ("<p>$sitios[$posicion]</p>");
        };
        function setValor($sitios, $posicion, $valor)
        {
            echo ("<p>$sitios[$posicion]</p>");
            $sitios[$posicion] = $valor;
            echo ("<p>$sitios[$posicion]</p>");
        };
        ?>


    </body>

</html>