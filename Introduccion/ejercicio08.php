<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>Crea una función llamada esMayor() que reciba como parámetros dos
            números y devuelva TRUE si el primer número es mayor que el segundo.
        </p>
        <?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        $respuesta = var_export(esMayor($a, $b));

        function esMayor($a, $b)
        {

            if ($a > $b) {
                return true;
            } else {
                return false;
            }
        };
        ?>
    </body>

</html>