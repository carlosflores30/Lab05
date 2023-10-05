<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Compra</title>
</head>
<body>
    <h1>Resultado de la Compra</h1>
    <?php
        $precioActual = $_POST['precioActual'];
        $cantidad = $_POST['cantidad'];

        $nuevoPrecio = $precioActual - ($precioActual * 0.05);
        $importeCompra = $nuevoPrecio * $cantidad;
        $descuento = $importeCompra * 0.07;
        $importePagar = $importeCompra - $descuento;
        $obsequio = 2 * $cantidad;

        echo "Nuevo Precio de la Gaseosa: S/. " . number_format($nuevoPrecio, 2) . "<br>";
        echo "Importe de la Compra: S/. " . number_format($importeCompra, 2) . "<br>";
        echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Importe a Pagar: S/. " . number_format($importePagar, 2) . "<br>";
        echo "Obsequio: $obsequio caramelos <br>";
    ?>
</body>
</html>
