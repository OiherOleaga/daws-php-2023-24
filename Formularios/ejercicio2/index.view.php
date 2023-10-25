<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <title>PHP prueba</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>

    <body>

        <p>
            Crea una aplicación que simule una
            calculadora. La calculadora estará
            representada por un formulario con dos
            campos numéricos y un desplegable
            para indicar la operación que se desea
            realizar (suma, resta, multiplicación o
            división). La aplicación deberá mostrar el
            resultado de la operación realizada y
            mostrar un mensaje de error cuando se
            intente dividir entre cero
        </p>
        <form action="ejer2.php" method="get">

            <p>
                Introduce el primer numero <input type="text" placeholder="000000" name="num1">

            </p>
            <p>
                Introduce el segundo numero <input type="text" placeholder="000000" name="num2">

            </p>
            <p>
                Seleciona la operacion deseada
                <select name="operacion">
                    <option>suma</option>
                    <option>resta</option>
                    <option>multiplicacion</option>
                    <option>division</option>
                </select>
            </p>
            <p><input type="submit" name="enviar"></p>
        </form>
        <p class="resultado">El número resultado es <?= $resultado ?></p>



    </body>

</html>