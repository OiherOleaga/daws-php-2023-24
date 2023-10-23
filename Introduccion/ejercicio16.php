<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea una función que reciba 2 números obtenidos mediante GET. La aplicación
            deberá realizar la siguiente operación:<br>
            ● Si los números son distintos, mostrará el resultado de su suma.<br>
            ● Si los números son iguales, mostrará el resultado de su multiplicación.
        </p>
        <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $resul = iguales($num1, $num2);

        echo ("<p>el resultado de la operacion es $resul</p>");

        function iguales($a, $b)
        {

            if ($a == $b) {
                $resul = $a * $b;
            } else {
                $resul = $a + $b;
            }
            return $resul;
        }
        ?>


    </body>

</html>