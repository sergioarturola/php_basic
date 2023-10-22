<?php
//asi como en javascript en php existe "map", "filter" y "reduce"

//nota function() = funcion normal   fn() = funcion "flecha"

//creando y llenando un array con la funcion "range"

$numeros = range(1,20);

//funcion map -> recibe como parametro una funcion y el iterable

$mapeando = array_map(function($nume){
    return "Numero: $nume";
}, $numeros);

print_r($mapeando);

echo"<br>";
echo"<br>";

//funcion filter -> toma como parametro el iterable y una funcion

$filtrando = array_filter($numeros, fn($variable) => $variable <10);
print_r($filtrando);

echo"<br>";
echo"<br>";

//funcion reduce ->toma como parametro el iterable y una funcion

$reduciendo = array_reduce($numeros, fn($carreo, $num) => $carreo + $num);

print_r($reduciendo);


?>