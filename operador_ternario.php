<?php
//creando un array y con un operador ternario verificamos si esta vacio o no, en vez de usar if-else

$libros =['Necronomicon', 'The Sting'];

//condicion  ? verdadero : falso

echo !empty($libros) ? var_dump($libros) : "No ha elementos";

//si no quisieramos poner un else despues de : null (solo se pone null) orque no pude quedar vacio

?>