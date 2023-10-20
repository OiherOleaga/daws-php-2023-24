<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p> Crea dos variables llamadas nombre y edad. La variable nombre tendrá el
            valor “Mikel” y la variable edad tendrá asignado el valor 22. A continuación crea
            una página que muestre la siguiente frase:
            Mi amigo Mikel tiene 22 años</p>
        <?php
        $nombre = 'Mikel';
        $edad = '22';

        echo ("<p>Mi amigo $nombre tiene $edad años</p>");
        ?>
    </body>

</html>