<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Catálogo de Productos</h1>
    <form action="ejer7.php" method="post">
        <table>
            <tr>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                <td>Portátil Dell XPS 13</td>
                <td>Portátil ultradelgado y ligero con pantalla táctil 4K.</td>
                <td>$1,299.99</td>
                <td><input type="number" name="producto1" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Monitor ASUS ROG Swift PG279Q</td>
                <td>Monitor gaming de alta velocidad de actualización y G-Sync.</td>
                <td>$699.99</td>
                <td><input type="number" name="producto2" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Teclado mecánico Corsair K95 RGB Platinum</td>
                <td>Teclado mecánico RGB con interruptores Cherry MX Speed.</td>
                <td>$179.99</td>
                <td><input type="number" name="producto3" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Ratón Logitech G Pro Wireless</td>
                <td>Ratón inalámbrico para juegos con sensor HERO.</td>
                <td>$149.99</td>
                <td><input type="number" name="producto4" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Auriculares Bose QuietComfort 35 II</td>
                <td>Auriculares inalámbricos con cancelación de ruido.</td>
                <td>$299.00</td>
                <td><input type="number" name="producto5" value="0" min="0"></td>
            </tr>
            <tr>
                <td>iPad Pro (2022)</td>
                <td>Tableta con pantalla Liquid Retina XDR y chip M1.</td>
                <td>$799.00</td>
                <td><input type="number" name="producto6" value="0" min="0"></td>
            </tr>
            <tr>
                <td>MacBook Air (M2, 2022)</td>
                <td>Portátil ligero con el chip M2 de Apple.</td>
                <td>$999.00</td>
                <td><input type="number" name="producto7" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Monitor LG UltraFine 5K</td>
                <td>Monitor de alta resolución para diseño y edición de video.</td>
                <td>$1,299.99</td>
                <td><input type="number" name="producto8" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Disco Duro Externo Samsung T7</td>
                <td>Disco SSD externo ultrarrápido con USB-C.</td>
                <td>$149.99</td>
                <td><input type="number" name="producto9" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Impresora Epson EcoTank ET-4760</td>
                <td>Impresora multifunción con tanques de tinta recargables.</td>
                <td>$499.99</td>
                <td><input type="number" name="producto10" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Router Wi-Fi ASUS RT-AX88U</td>
                <td>Router de alta velocidad con soporte para Wi-Fi 6.</td>
                <td>$299.99</td>
                <td><input type="number" name="producto11" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Webcam Logitech C920</td>
                <td>Webcam de alta definición para videoconferencias.</td>
                <td>$79.99</td>
                <td><input type="number" name="producto12" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Altavoces Sonos Play:5</td>
                <td>Altavoces inteligentes para un sonido envolvente.</td>
                <td>$499.00</td>
                <td><input type="number" name="producto13" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Disco Duro Externo LaCie Rugged</td>
                <td>Disco duro resistente a golpes y caídas.</td>
                <td>$149.00</td>
                <td><input type="number" name="producto14" value="0" min="0"></td>
            </tr>
            <tr>
                <td>Portátil HP Spectre x360</td>
                <td>Portátil convertible con pantalla táctil OLED.</td>
                <td>$1,199.00</td>
                <td><input type="number" name="producto15" value="0" min="0"></td>
            </tr>
        </table>
        <input type="submit" value="Enviar">
    </form>

    <?php mostrarCesta($compras, $productos); ?>


    <h1><?= $precio ?></h1>
</body>

</html>