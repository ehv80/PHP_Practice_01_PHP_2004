 
/* 
 * Archivo / @File : Ejemplo53.php
 *
 * Fecha / @Date : Martes 09 de Agosto del 2022 / Tuesday, August 09, 2022
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
 * Funciones
 * ...
 * Por defecto, todos los parámetros pasados a las funciones son por valor, esto significa
 * que si cambiamos el valor del argumento dentro de la función, no se verá modificado fuera de dicha función.
 * Si en cambio queremos que cambien los valores, deberemos pasarlo por referencia, anteponiendo un  & (ampersand)
 * al parámetro que deseamos pasar por referencia.
 * Para comprender un poco más esto, veamos el siguiente ejemplo:
 */

<?php

// Funciones
// Pasando parámetros por defecto

function mayusculas( $nombre )
{
	// Voy a pasar a mayúsculas el nombre
	$nombre = strtoupper($nombre);
	return $nombre;
}

// Pasando parámetros por referencia
function mayusculas2($nombre)
{
	// Voy a pasar a mayúsculas el nombre y agregarle un texto adicional
	$nombre = strtoupper($nombre) ." este es un texto adicional";
	return $nombre;
}

$nombre = "Horacio Trebino";
echo "El nombre es: ". mayusculas($nombre) ."<br>";

// Paso el parámetro por referencia, lo cuál terminará cambiando la variable $nombre
echo "El nombre es: ". mayusculas2(&$nombre). "<br>";

// Vuelvo a mostrar la variable nombre que debería estar modificada
echo "El nombre es: ". mayusculas($nombre). "<br>";

?>
