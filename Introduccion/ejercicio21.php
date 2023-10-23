<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Modifica el programa anterior de forma que en el momento en el que la suma
            sea mayor que 100, devuelva el último valor antes de superar 100.

        </p>
        <?php

        $num = $_GET["numero"];

        sumarNumeros($num);
        function sumarNumeros($num)
        {
            $total = 0;
            for ($x = 0; $x <= $num; $x++) {
                if (($x + $total) > 100) {
                    break;
                } else {
                    $total += $x;
                }
            }
            echo ("el resultado de la suma es $total");
        }
        ?>


    </body>

</html>