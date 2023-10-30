<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <link rel="stylesheet" href="style.css">

    <head>

    <body>
        <p> Añade a la aplicación anterior un botón o enlace para borrar la cookie de nombre
            “usuario”.

        </p>

        <h2>Ultimo usuario: </h2>
        <form method="post" action="ejer2.php">
            <label for="texto">introduce el texto que quieres almacenar: </label>
            <input type="text" id="texto" placeholder="texto ejemplo" name="texto">
            <input type="submit" value="enviar">
            <input type="button" value="borrar Cookie" name="borrar">
        </form>
        <h1> <?= $cadena ?></h1>
    </body>

</html>