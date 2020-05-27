<?php

// Declaro unas variables de ámbito global
$a = 4;
$b = 2;


function promedio()
{
	// Calculo el Promedio, accediendo a los valores de las variables globales a y b
	$promedio = ($GLOBALS[a] + $GLOBALS["b"]) / 2;

	// La muestro
	echo "$promedio<br>";
}

// Muestro el valor de la variable promedio dentro de la función
promedio(); 

?>
