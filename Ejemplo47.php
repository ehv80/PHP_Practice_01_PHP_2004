 
/* 
 * Archivo / @File : Ejemplo47.php
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
 * A continuación veremos un ejemplo, utilizando la función require()
 * en un bucle, para llamar a más de un archivo
 */

<?php

// Utilizando require en un bucle
for( $i = 10 ; $i <= 12 ; $i ++ )
{
	require("Ejemplo". $i . ".php");
}

?>
