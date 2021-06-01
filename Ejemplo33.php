<?php 
/* 
 * Archivo / @File : Ejemplo33.php / Example33.php
 *
 * Fecha / @Date : Martes 01 de Junio del 2021 / Tuesday, June 01, 2021
 *
 * Autor / @Author : Ezequiel Hernán Villanueva 
 *
 *
 * Vamos a ver otra forma de escribir la sentencia condicional if con la notación de dos puntos. 
 * Let's see another way to write the conditional if statement with the colon notation.
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
$nombre = "James Albert Wesker";

if( $nombre == "James Albert Wesker" ) :
	echo "Hola / Hellow: <b>$nombre</b><br>";
	echo "Esperamos que disfrutes un buen momento en este pequeño sitio web<br>";
	echo "We hope you have a good time on this little website<br>";
	endif;

if ($nombre != "James Albert Wesker" ) :
	echo "Quien Rayos eres!<br>";
	echo "Who the hell are you!<br>";
	endif;
?>
