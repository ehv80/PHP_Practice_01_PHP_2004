 
/* 
 * Archivo / @File : Ejemplo39.php
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
 * Pero como dijimos al principio de este apartado, while no es la única sentencia que nos permite realizar loop.
 * A continuación, conoceremos la sintaxis de do..while y como emplearlo a través de un ejemplo práctico.
 *
 * DO..WHILE
 * Esta sentencia es igual a la anterior (while) con la diferencia de que en vez de evaluar si se cumple
 * la condición al principio del bucle, lo evalúa al final de este.
 * De esta forma, nos aseguramos que todo el código contenido en el do..while, será evaluado al menos una vez,
 * se cumpla la condición o no. La sintaxis es:
 * 	do
 * 	{
 * 		......
 * 		......
 * 	} while ( condición );
 * 
 * Veamos el siguiente ejemplo que produce exactamente el mismo resultado
 *
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

	// Le sumo 1 a número
	$numero ++; 
} while( $numero <= 100 );
?>
/*
 * El resultado de este código será una larga lista de números y sus respectivos cuadrados desde el uno hasta el cién.
 */
