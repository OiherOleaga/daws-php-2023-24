<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php if (isset($mensajeError)) {
        echo "<p>$mensajeError</p>";
    } ?>
    <form method="post" action="ejer5.php">
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