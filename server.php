<?php

//la variable SERVER es un array asociativo que nos trae informacion del entorno de ejecucion

foreach ($_SERVER as $key => $value) {
	echo "{$key} = {$value} <br>";
}
?>