<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Modifica el programa anterior para que sume únicamente los números pares

        </p>
        <?php

        $num = $_GET["numero"];

        sumarNumeros($num);
        function sumarNumeros($num)
        {
            $total = 0;
            for ($x = 0; $x <= $num; $x++) {
                if ($x % 2 == 0) {
                    $total += $x;
                }
            }
            echo ("el resultado de la suma es $total");
        }
        ?>


    </body>

</html>