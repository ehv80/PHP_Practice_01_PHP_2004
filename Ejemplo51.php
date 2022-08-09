 
/* 
 * Archivo / @File : Ejemplo51.php
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
 * Por ejemplo, apliquemos esta función en un código que, dados dos números calcule la multiplicación de ambos.
 * El código debería ser similar al que se muestra en este Ejemplo51 que vemos en la siguiente página. 
 */

<?php

// Declaración de Funciones

function multiplica( $numero1, $numero2 )
{
	$resultado = $numero1 * $numero2;
	return $resultado;
}

echo "La multiplicación de 4 x 2 da: " .multiplica(4,2);

?>
