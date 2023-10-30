<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <link rel="stylesheet" href="style.css">

    <head>

    <body>
        <p> Crea una página que tenga un formulario con un campo de texto en el que poder
            almacenar un nombre de usuario. La aplicación guardará el texto introducido en una cookie
            (sin especificar la duración) de nombre “usuario” y mostrará el último valor almacenado
            siempre que la cookie contenga algún valor.
        </p>

        <h2>Ultimo usuario: </h2>
        <form method="post" action="ejer1.php">
            <label for="texto">introduce el texto que quieres almacenar: </label>
            <input type="text" id="texto" placeholder="texto ejemplo" name="texto">
            <input type="submit" value="enviar">
        </form>
        <h1> <?= $cadena ?></h1>
    </body>

</html>