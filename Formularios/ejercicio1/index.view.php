<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <title>PHP prueba</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>

    <body>

        <p>
            Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
            pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
            mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
            de forma que el usuario pueda seguir introduciendo valores.
        </p>
        <form action="ejer1.php" method="post">

            <p>
                Introduce la temperatura <input type="text" placeholder="temperatura" name="temp">

            </p>
            <p>
                Indica la unidad de ka temperatura introducida
                <select name="unidad">
                    <option>Celsius</option>
                    <option>Farenheit</option>
                </select>
            </p>
            <p><input type="submit" name="enviar"></p>
        </form>
        <p class="resultado">El número resultado es <?= $temperatura ?></p>



    </body>

</html>