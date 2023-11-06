<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            padding: 15px;
        }
    </style>
</head>

<body>
    <h4>Enunciado:</h4>
    <p>
        Desarrolla una tienda online con un catálogo de productos y un carrito de la compra.
        Cada producto tendrá la siguiente información: nombre, descripción y precio (puedes
        almacenar otra información extra que te sirva de ayuda, como un ID). Se podrán adquirir
        tantas unidades de cada producto como se desee (también podrá eliminarse un producto añadido
        o una unidad del mismo).
    </p>
    <h4>Solución:</h4>

    <hr>

    <h5>Cesta de la compra:</h5>
    <?php
    if (isset($productosComprados)) {
    ?>
        <ul>
            <?php
            foreach ($productosComprados as $idProducto) {
            ?>
                <li><?= $productos[$idProducto]['nombre'] ?></li>
            <?php
            }
            ?>
        </ul>
        <p>Precio total: <?= $precioTotal ?></p>
        <a href='ejercicio09.php?accion=comprar' class='btn btn-primary'>Comprar</a>
    <?php
    } else {
    ?>
        <p>La cesta está vacía</p>
    <?php
    }
    ?>

    <hr>
    <h5>Catálogo de productos:</h5>

    <table class='table'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Detalle</th>
                <th>Comprar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productos as $id => $producto) {
            ?>
                <tr>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['descripción'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><a href='ejercicio09.php?accion=detalle&idProducto=<?= $id ?>'>Detalle</a></td>
                    <td><a href='ejercicio09.php?accion=insertar&idProducto=<?= $id ?>'>Comprar</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>



</body>

</html>