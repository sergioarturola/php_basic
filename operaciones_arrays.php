<?php

//vamos a ver algunas funciones para operar con arrays

$frutas = ["naranja", "manzana", "pera", "limon"];

//para saber cuantos elementos tiene un array

echo "N° de elementos: ";
echo count($frutas);
echo "<br>";

echo "pera se encuentra en el array? ";
//para buscar si un elemento esta lleva dos parametros el elemento a buscar y el array
var_dump(in_array('pera', $frutas));

echo"<br>";
//para agregar elementos al array hay 3 maneras principales 
$frutas[] = "fresa"; //por "constructor"
array_push($frutas, "fresas", "piña"); //usando push, se pueden agregar varios items los agrega al final
array_unshift($frutas, "cerezas", "mamey"); //este agrega al inicio

print_r($frutas);

echo"<br>";

//operaciones para elminar elementos del array

array_pop($frutas); //elimina el ultimo elemento
array_shift($frutas); //elimina el primer elemento
print_r($frutas);

echo "<br>";

//con array chunk podemos convertir el array en un objeto y dependiendo del valor es como los ira agrupandp

$copia = array_chunk($frutas, 3);//acomodara de 3 en 3 los elementos como si fueran un array de arrays
print_r($copia);

echo "<br>";

//para concatenar 2 o mas arrays

$uno = [1,2,3];
$dos = [4,5,6];
/*
 tambien se puede usar el operador spread para combinar dos arrays
 $cuatro = [...$uno...$dos];
*/
$tres = array_merge($uno, $dos);
print_r($tres);

echo "<br>";

//se pueden combinar 2 arrays para formar un objeto llave-valor

$llaves = ["rojo", "azul", "verde"];
$valores = ["dragon", "cielo", "pasto"];

$combinado = array_combine($llaves, $valores);
print_r($combinado);
/*
si solo quisiera imprimir las llaves (keys) del objeto entonces
$solollave = array_keys($combinado)
 0 =>  rojo 1 =>azul 2 =>verde
*/

echo "<br>";

//podemos voltear, es decir que ahora las llaves sean los valores y viceversa

$volteado = array_flip($combinado);
print_r($volteado);






?>