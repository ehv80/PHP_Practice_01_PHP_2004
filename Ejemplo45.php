 
/* 
 * Archivo / @File : Ejemplo45.php
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
 * Continue
 * Otra sentencia disponible es continue que sirve para saltear en un bucle el resto de la iteración
 * y continuar la ejecución al comienzo de otra iteración. De forma similar al break, 
 * también podemos indicarle cuantos bucles hay que saltearse.
 *
 * Instrucciones require() e include()
 * PHP nos provee distintas instrucciones para incluir el contenido de un archivo dentro de otro archivo. 
 * Esto nos será de utilidad, ya que podremos crear, por ejemplo, un archivo de funciones donde incluiremos
 * todas las funciones de nuestra aplicación. Luego podremos llamar al archivo de funciones para tener disponibles
 * todas las funciones incluídas en el archivo.
 *
 * Require()
 * La instrucción require() se reemplaza por el contenido del archivo que recibe como parámetro.
 * Se usa principalmente para hacer referencia a funciones, constantes y otras que no van a ser modificadas en la aplicación web,
 * como por ejemplo, los valores para conectarnos a una Base de Datos.
 * Veamos Ejemplo45.php y Ejemplo46.php estarán relacionados
 */

<?php

// Constantes
define ("NOMBRE", "Diego");
define ("APELLIDO", "Piacenza");

// Funciones
function suma_numeros( $a, $b)
{
	$resultado = $a + $b;
	return $resultado;
}

?>
/*
 * En este ejemplo vemos que hemos definido 
 * dos constantes (denominadas NOMBRE y APELLIDO) 
 * y una función suma_numeros()
 */
