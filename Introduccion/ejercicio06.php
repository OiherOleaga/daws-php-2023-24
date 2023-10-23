<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>Crea dos variables, a y b que recojan los valores enviados mediante el método
            GET. Almacena el resultado de las siguientes operaciones en nuevas variables y
            muéstralas por pantalla.
            ○ Resta de a y b
            ○ División de a entre b
            ○ Resultado de a mayor que b
            ○ Resultado de a menor o igual que b</p>
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