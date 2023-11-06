<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Ejercicio 1 BD</h1>
    <ul>
        <?= $lista ?>
    </ul>


    <div>
        <form method="get" action="ejer1.php">
            <input type="text" name="nombre" placeholder="nombre" required>
            <input type="text" name="apellido" placeholder="apellido" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="number" name="edad" placeholder="edad" required>
            <input type="submit" value="añadir">
        </form>

    </div>

</body>

</html>