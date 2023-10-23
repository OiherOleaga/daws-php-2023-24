<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>¿Cómo mejorarías el ejercicio anterior para que la función sea más reutilizable?
            Piénsalo bien y modifica la función.
        </p>
        <?php
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        $respuesta = multiplicar($a, $b);
        echo ("La multiplicacion de $a y $b es $respuesta");

        function multiplicar($a, $b)
        {
            $resul = $a * $b;

            return $resul;
        };
        ?>
    </body>

</html>