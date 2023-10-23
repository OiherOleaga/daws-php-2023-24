<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un programa que reciba un número y realice la suma de todos los
            números entre el 0 y el número dado (este incluido). Deberá mostrar el resultado
        </p>
        <?php

        $num = $_GET["numero"];

        sumarNumeros($num);
        function sumarNumeros($num)
        {
            $total = 0;
            for ($x = 0; $x <= $num; $x++) {
                $total += $x;
            }
            echo ("el resultado de la suma es $total");
        }
        ?>


    </body>

</html>