<?php

$importeVendido = $_POST['importe']; 
$hijosEnEdadEscolar = $_POST['hijos']; 
$sueldoBasico = 600;
$porcentajeComision = 7.5;
$bonificacionPorHijo = 50;
$porcentajeDescuento = 11;

$comision = ($importeVendido * $porcentajeComision) / 100;
$bonificacion = $hijosEnEdadEscolar * $bonificacionPorHijo;
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;
$descuento = ($sueldoBruto * $porcentajeDescuento) / 100;
$sueldoNeto = $sueldoBruto - $descuento;

echo nl2br("Comisión: S/. ".number_format($comision,2). "\n");
echo nl2br("Bonificación: S/. ".number_format($bonificacion,2) . "\n");
echo nl2br("Sueldo Bruto: S/. ".number_format($sueldoBruto,2)."\n");
echo nl2br("Descuento: S/. ".number_format($descuento,2)."\n");
echo nl2br("Sueldo Neto: S/. ".number_format($sueldoNeto,2)."\n");
?>
