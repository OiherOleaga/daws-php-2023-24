<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array asociativo que incluya 5 palabras castellano y sus respectivas
            traducciones al inglés. Muestra por pantalla las palabras y sus traducciones en
            frases como esta:
        </p>
        <?php
        $sitios = [
            "mesa" => "table",
            "movil" => "phone",
            "ordenador" => "computer",
            "casa" => "house"
        ];

        echo ("<p>La traduccion de mesa es $sitios[mesa]</p>");
        echo ("<p>La traduccion de movil es $sitios[movil]</p>");
        echo ("<p>La traduccion de ordenador es $sitios[ordenador]</p>");
        echo ("<p>La traduccion de casa es $sitios[casa]</p>");
        ?>


    </body>

</html>