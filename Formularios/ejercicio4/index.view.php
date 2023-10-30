<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>

</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="ejer4.php" method="get">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <label for="">Usuario</label>
                        <input type="text" required name="nombre">

                    </div>
                    <div class="inputbox">
                        <label for="">Contraseña</label>
                        <input type="password" required name="contra">

                    </div>

                    <input type="submit" value="enviar">
                    <p><?= $usuario ?></p>
                    <p><?= $contra ?></p>

                    <p><?= $mensaje ?></p>

                </form>
            </div>
        </div>
    </section>
</body>

</html>