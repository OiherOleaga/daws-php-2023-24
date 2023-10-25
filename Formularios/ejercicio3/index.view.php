<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <head>

    <body>

        <p>
            Crea un array con 20 números aleatorios entre el 1 y el 10 utilizando la función
            random_int(). El usuario introducirá en el formulario un número y al darle a “Enviar”
            la aplicación comprobará cuántas veces aparece el número introducido en el array.
        </p>
        <form action="ejer3.php" method="get">

            <p>
                Introduce tu numero <input type="text" name="elegido">
                <input type="submit" value="¡Probar suerte!">
            </p>
        </form>
        <p class="resultado">El número aparece <?php isset($resultado) ? print $resultado : "(no has añadido un numero)" ?> veces</p>



    </body>

</html>