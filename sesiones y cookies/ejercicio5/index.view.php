<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <link rel="stylesheet" href="style.css">

    <head>

    <body>
        <p> Desarrolla una página de login con un formulario compuesto por los campos de usuario y
            contraseña. La aplicación no dejará continuar hasta que se inicie sesión con un nombre de
            usuario y contraseña correctos (a comprobar contra un array asociativo). Una vez el usuario
            haya accedido correctamente, en lugar del formulario de acceso la aplicación mostrará un
            mensaje de bienvenida y un enlace para cerrar sesión. Al hacer click en el enlace para cerrar
            sesión, la aplicación destruirá información de la sesión almacenada.

        </p>

        <form method="get" action="ejer5.php">
            <label for="texto">Nombre de usuario</label>
            <input type="text" name="user" id="persona">
            <label for="texto">Contraseña</label>
            <input type="password" name="contra" id="contra">
            <input type="submit" value="añadir" name="añadir">
        </form>

        <h1> <?= $sesionValida ?></h1>
    </body>

</html>