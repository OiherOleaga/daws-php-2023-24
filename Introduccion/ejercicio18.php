<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea una función que reciba un número indicando el día de la semana y que
            muestre por pantalla el día de la semana. En caso de recibir otro número que no
            esté entre el 1 y el 7, mostrará el mensaje “No es ningún día de la semana". Utiliza
            un switch para realizar el ejercicio.<br>
            diaSemana(2) → “El día número 2 es martes.”<br>
            diaSemana(9) → “No es ningún día de la semana”
        </p>
        <?php

        $diasSemana = ["lunes", "martes", "mmiercoles", "jueves", "viernes", "sabado", "domingo"];
        $dia = $_GET["dia"];
        diasSemana($diasSemana, $dia);
        function diasSemana($diasSemana, $numDia)
        {
            if ($numDia > 6 || $numDia < 0) {
                echo ("<p>el numero del dia debe de estar entre 0 y 6</p>");
            } else {
                echo ("<p>el dia de la semana es $diasSemana[$numDia]</p>");
            }
        }
        ?>


    </body>

</html>