 
/* 
 * Archivo / @File : Ejemplo44.php
 *
 * Fecha / @Date : Jueves 28 de Julio del 2022 / Thursday, July 28, 2022
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
 * Break
 * La función  break  se utiliza para cortar la ejecución de un código dentro de un bucle, como vimos en el ejemplo anterior.
 * Opcionalmente se le puede agregar un parámetro que indique cuantas estructuras de control debe saltar:
 */

<?php

// Utilizando el break para saltar mas de una estructura de control
// En este caso vamos a salir de 2 while anidados

// Comenzaremos desde 1
// Definimos la variable $numero a la cual le asignamos el valor 1
$numero = 1;

while( $numero <= 100 )
{
	// Calculo el valor del cuadrado del número
	$cuadrado = $numero * $numero;

	// Imprimo el número y el cuadrado de dicho número
	echo "Para el número " . $numero . " el cuadrado es " . $cuadrado . "<br>";

	if ( $numero == 50 )
	{
		echo "<br>Llegamos a la mitad del proceso y comenzamos la cuente regresiva";

		// Ahora hacemos una cuenta regresiva desde el número actual hasta 10 y en 10 salimos
		while( $numero >= 1 )
		{
			if( $numero == 10 )
			{
				echo "<br>Salimos por la acción del break<br>";
				break 2;
			}
		} // end while
	} // end if numero == 50

	// Le sumo 1 a numero
	$numero ++;
}
echo "<br>Podemos ejecutar el código restante a partir de aquí<br>";
?>
/*
 * En este ejemplo vemos que el programa cuenta hasta cincuenta y saca el cuadrado de cada número mediante un while,
 * y luego con otro while, comenzamos una cuenta regresiva de 50 hasta 10, por medio de un if, utilizamos la sentencia break 2
 * para que escape de los dos while anidados y siga con el código restante.
 * De esta manera podemos ver el funcionamiento del break con parámetros
 */
