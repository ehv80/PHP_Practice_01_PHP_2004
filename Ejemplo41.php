 
/* 
 * Archivo / @File : Ejemplo41.php
 *
 * Fecha / @Date : Miércoles 27 de Julio del 2022 / Wednesday, July 27, 2022
 *
 * Autor / @Author : Ezequiel Hernán Villanueva 
 *
 *
 * 
 * Some source code files with examples from The Book
 * "PROGRAMACIÓN PHP"
 * a Interpreted Programming Language
 * PHP Hipertext Preprocessor
 * for various GNU\Linux based Operative Systems.
 * Thanks & Writted by: Martín Ramos Monso @ REDUSERS
 *
 * Edited by Me a little time ago!
 * 
 * You can Copy / Edit / Change / Distribute
 * GNU/GPL License Software Version 3.0
 *
 * For Educational Purpose.
 *
 */

/*  
 * Otra cosa que podríamos hacer es que cuando llegue al número 50, de por terminada la ejecución del while.
 * Esto lo hacemos utilizando la sentencia break; de tal forma que el if del programa quedaría como se muestra
 * en este Ejemplo41.php
 */

<?php

// Utilizando el while para contar números y sacar el cuadrado

// Comenzaremos desde 1
// Definimos la variable $numero a la cual le asignamos el valor 1
$numero = 1;

do
{
	// Calculo el valor del cuadrado del número
	$cuadrado = $numero * $numero;

	// Imprimo el número y el cuadrado de dicho número
	echo "Para el número " . $numero . " el cuadrado es " . $cuadrado . "<br>";
	
	if( $numero == 50 )
	{
		echo "<br>Llegamos a la mitad del proceso y lo voy a dar por terminado<br><br>";
		break;
	}

	// Le sumo 1 a número
	$numero ++; 
} while( $numero <= 100 );

echo "<br>Podemos ejecutar el código restante a partir de aquí<br>"

?>
/*
 * Notemos que al ejecutar la función break; escapamos del bucle do..while, 
 * para continuar ejecutando las líneas de código que están a continuación del do..while.
 * El resultado de este código será una larga lista de números y sus respectivos cuadrados desde el uno hasta el cincuenta.
 */
