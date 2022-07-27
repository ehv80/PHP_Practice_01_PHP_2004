 
/* 
 * Archivo / @File : Ejemplo38.php
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
 * Una cosa ha tener muy en cuenta es que en un while debe haber una variable que pueda alterar
 * la condición del mismo, ya que sinó entraríamos en un loop infito que no tendría fin. 
 * En el Ejemplo anterior, la variable que altera la condición es la variable $numero, que se va incrementando en 1, hasta llegar a 100
 *
 * Si no existiera la línea   $numero ++   el while se ejecuta en forma infinita mostrando siempre el resultado del número uno.
 *
 * El siguiente ejemplo entra en un loop infinito, proque la variable $numero no se incrementa, ya que en el programa la hemos marcado como un comentario
 * con //
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
	//$numero ++; comentado
}
?>
/*
 * El resultado de este código será una larga lista infinita del numero uno y su cuadrado.
 */
