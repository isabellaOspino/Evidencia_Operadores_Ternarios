<?php
function calculartotal($numeroArticulos, $precioArticuloIndv){
    ifn($numeroArticulos >=10){
        $descuento= 0.10;

    } else {
        $descuento = 0;

    }
    $descuentototal = $preciototalsindescuento * $descuento;

    $preciototalsindescuento = $numeroArticulos * $precioArticuloIndv;

    $preciototalcondescuento  = $preciototalsindescuento * $descuentototal;


}

$pagototal = calculartotal($numeroArticulos,$precioArticuloIndv);

echo "ingrese numero de articulos  . $numeroArticulos";
echo "precio de articulo individual . $precioArticuloIndv";
echo " precio total a pagar . $pagototal";
