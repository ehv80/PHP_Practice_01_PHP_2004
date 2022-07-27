 
/* 
 * Archivo / @File : Ejemplo37.php
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
 * Bucles de Control o Loops
 * Un bucle de control o loop sirve en programación para ejecutar n cantidad de veces una porción de código 
 * de un programa. Puede ser para ejecutar n cantidad de veces o hasta que se cumpla una condición específica.
 * A continuación conoceremos el modo de emplear las sentencias que podemos utilizar para generar loops
 * con PHP. El Primer caso es el while
 *
 * While
 * Esta instrucción nos permite ejecutar el código del programa mientras (while en inglés) se cumpla la condición.
 * Se evalúa que se cumpla la condición: 
 * - Si la condición es válida ingresa en el loop (el ciclo del while) y ejecuta la porción de código que hayamos puesto en el mismo
 * - Cuando deja de cumplirse la condición, el programa sale del while y continua con el resto del programa
 * - Si por el contrario, la condición no se cumple, el código del while no se ejecutará
 * Esta función es particularmente importante, junto con do..while, o similares, ya que nos permitirá leer los registros de una tabla 
 * cuando estemos trabajando con bases de datos.
 * De esta forma podremos listar, por ejemplo, todos los nombres que tenga mi base de datos de agenda. Pero no se apresuren, eso lo veremos
 * más adelante.
 * La sintaxis es la siguiente:
 *
 * 	while( condición )
 * 	{
 * 		......
 * 		......
 * 	}
 *
 * Otra forma de escribir el While es
 * 	while ( condición ) :
 * 		.......
 * 		.......
 * 	endwhile;
 *
 * Haremos que el programa cuente números, y saque el cuadrado de dicho número hasta que llegue a 100, imprima ambos datos, el número y el cuadrado del número.
 * Veamos el ejemplo para hacer esto:	
 */

<?php

// Utilizando el while para contar números y sacar el cuadrado

// Comenzaremos desde 1
// Definimos la variable $numero a la cual le asignamos el valor 1
$numero = 1;

while( $numero <= 100 )
{
	// Calculo el valor del cuadrado del número
	$cuadrado = $numero * $numero;

	// Imprimo el número y el cuadrado de dicho número
	echo "Para el número " . $numero . " el cuadrado es " . $cuadrado . "<br>";

	// Le sumo 1 a número
	$numero ++;
}
?>
/*
 * El resultado de este código será una larga lista de números, y su cuadrado, desde el 1 al 100
 */
