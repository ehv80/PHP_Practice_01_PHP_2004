 
/* 
 * Archivo / @File : Ejemplo42.php
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
 * For
 * La sentencia for realiza en bucle un determinado número de veces
 * Encontraremos que se divide en Tres partes
 * - En la primera inicializaremos la variable que utilizaremos en la condición
 * - En la segunda es dónde debemos indicar la condición por la cuál finaliza el bucle
 * - En la tercera es dónde modificaremos la variable, ya que sin esta volveríamos a entrar a un loop infinito como vimos anteriormente en el while
 * Las tres partes van separadas por ; (punto y coma) 
 */

<?php

// Utilizando un for

// Comenzaremos desde 1
// Definimos la variable $numero a la cual le asignamos el valor 1


for( $i = 1; $i <= 100 ; $i++ )
{
	// Calculo el valor del cuadrado del número
	$cuadrado = $i * $i;

	// Imprimo el número y el cuadrado de dicho número
	echo "Para el número " . $i . " el cuadrado es " . $cuadrado . "<br>";
}

?>
/*
 * En este ejemplo ejecutamos un bucle for mientras el valor de la variable $i sea inferior o igual a 100.
 * Por cada iteración que tiene el bucle for, incrementaremos el valor de la variable $i en uno, ya que sin esto también entraríamos en un loop infinito
 * como hemos visto anteriormente
 * El resultado de este código será una larga lista de números y sus respectivos cuadrados desde el uno hasta el cien.
 */
