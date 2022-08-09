 
/* 
 * Archivo / @File : Ejemplo52.php
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
 * Hagamos algo un poco más complejo, un programa que nos dibuje una tabla,
 * pasándole como parámetros la cantidad de filas y columnas que queremos.
 */

<?php

// Función para dibujar una tabla, pasándole como parámetros la cantidad de filas y columnas

function tabla( $filas, $columnas )
{
	// voy a concatenar todo en una variable llamada tabla
	$tabla = '<table border="1" width=100%>';

	// Mientras haya filas las dibujo 
	while( $cnt_filas < $filas )
	{
		$cnt_filas++;

		// Abro la fila
		$tabla .= "<tr>";

		// Dibujo las columnas mientras halla
		while( $cnt_columnas < $columnas )
		{
			$cnt_columnas++;

			// Dibujo la columna
			$tabla .= "<td>xxxxx</td>";
		}

		// Cierro la fila
		$tabla .= "</tr>";

		// Pongo el contador de columnas a cero
		$cnt_columnas = 0;

	}
	$tabla .= "</table>";
	return $tabla;
}

echo tabla(5,2);

?>
