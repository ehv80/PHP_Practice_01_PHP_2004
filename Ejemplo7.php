<?php

// Declaro una variable de ámbito global

function prueba()
{
	// Declaro la variable número como de ámbito global
	global $numero;

	// Le asigno un valor
	$numero = 12345;

	// La muestro
	echo "$numero<br>";
}

// Muestro el valor de la variable numero dentro de la función
prueba(); 
//Muestro el valor de la variable numero a nivel global
echo $numero;

?>
