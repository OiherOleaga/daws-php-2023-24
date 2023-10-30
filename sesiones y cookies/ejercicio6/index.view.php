<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <p>
        Añade a la aplicación anterior un control de intentos: el usuario tendrá un máximo de 3
        intentos, una vez superados, se mostrará un mensaje indicando: “Has superado el número
        máximo de intentos en esta sesión”
    </p>

    <?php if (isset($mensajeError)) {
        echo "<p>$mensajeError</p>";
    } ?>
    <form method="post" action="ejer6.php">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required>
        <br>
        <input type="submit" name="login" value="Iniciar Sesión">
    </form>
</body>

</html>