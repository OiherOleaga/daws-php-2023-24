<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <link rel="stylesheet" href="style.css">

    <head>

    <body>
        <p> Crea una página que tenga un select con dos opciones: “Euskera” y “Castellano”. La
            aplicación guardará el valor indicado en una cookie de nombre “idioma” (tendrá 1 minuto de
            duración) y mostrará el último valor almacenado siempre que la cookie contenga algún valor

        </p>


        <form method="get" action="ejer3.php">
            <label for="texto">idoma: <?= $idioma ?></label>
            <select name="idioma">
                <option>Español</option>
                <option>españa</option>
                <option>Euskera</option>
                <option>Ingles</option>
            </select>
            <input type="submit" value="guardar">
        </form>
    </body>

</html>