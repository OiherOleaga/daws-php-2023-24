<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array con nombres de países y a continuación una función que reciba
            el nombre de un país y recorra el array, comprobando valor por valor si alguno de
            ellos es igual al del parámetro recibido. Devolverá la posición en la que se
            encuentre (en caso de no encontrarlo devolverá -1)..<br>
            [“Brasil”, “Portugal”, “Islandia”, “Mexico”, “Filipinas”, “Marruecos”]<br>
            encontrarPosicion(“Islandia”) → 3<br>
            encontrarPosicion(“Dinamarca”) → -1

        </p>
        <?php

        $paises = ["brasil", "portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

        $num = buscarPais($paises, "Islandia");
        echo ("<p>el pais esta en la posicion $num</p>");
        $num = buscarPais($paises, "Dinamarca");
        echo ("<p>el pais esta en la posicion $num</p>");
        function buscarPais($paises, $nombre)
        {
            $numero = -1;
            for ($x = 0; $x < count($paises); $x++) {
                if ($nombre == $paises[$x])
                    $numero = $x;
            }
            return $numero;
        }
        ?>


    </body>

</html>