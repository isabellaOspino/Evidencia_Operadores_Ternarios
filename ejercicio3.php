<?php
echo "ingresar las dimensiones de un terreno agrícola en metros "

echo "Largo";
$largo = readline();

echo "Ancho";
$ancho = readline();

$AreaTotal = $largo * $ancho;

if($AreaTotal = >= 1000){
    $TipoCultivo =  "cultivo extensivo";

}else{
    $TipoCultivo = "cultivo de jardín o huerto";
}

echo " el cultivo con dimensiones de $largo y $ancho metros cuadrados es adecuado para cultivos extensivos"
