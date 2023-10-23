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
        $resta = $a - $b;
        echo ("<p>La resta de $a y $b es $resta</p>");
        $division = $a / $b;
        echo ("<p>La division de $a y $b es $division</p>");
        if ($a > $b) {
            echo ("<p>A es mayor que B</p>");
        } else {
            echo ("<p>A no es mayor que B</p>");
        }
        if ($a <= $b) {
            echo ("<p>A es menor o igual que B</p>");
        } else {
            echo ("<p>A no es menor o igual que B</p>");
        }
        ?>
    </body>

</html>