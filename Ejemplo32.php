<?php 
/* 
 * Archivo / @File : Ejemplo32.php / Example32.php
 *
 * Fecha / @Date : Martes 01 de Junio del 2021 / Tuesday, June 01, 2021
 *
 * Autor / @Author : Ezequiel Hernán Villanueva 
 * 
 * Vamos a ver la sentencia condicional    elseif. 
 * We will see the conditional statement 
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
// Definimos y asignamos variables 
// We define and asign values to the variables
$numero = 5;

if( $numero <= 3)
{
	echo "El número es menor que Tres o es igual a 3<br>";
	echo "The number is less than Three or is equal to 3<br>";
}
elseif( $numero <= 4 )
{	
	echo "El número es menor que Cuatro o es igual a 4<br>";
	echo "The number is less than Four or is equal to 4<br>";
}
elseif( $numero >= 6 )
{
	echo "El número es mayor que Seis o es igual a 6<br>";
	echo "The number is greather than Six or is equal to 6<br>";
}
else
{
	echo "El número es Cinco!<br>";
	echo "The Number is Five!<br>";
}
?>
