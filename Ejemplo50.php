 
/* 
 * Archivo / @File : Ejemplo50.php
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
 * Además, si en un bucle se ejecutan varias veces una instrcción require(), el intérprete lo incluirá una sola vez, 
 * sin embargo si es include(), se incluirá el fichero cada vez que se ejecute la instrucción.
 * Por ejemplo si hiciéramos un include de un mismo archivo, donde están definidas funciones más de una vez, nos daría un error,
 * ya que la función que estamos tratando de definir ya está definida.
 *
 * Otra diferencia entre require() e include() es que si hacemos un require() de un archivo que no existe, nos dará dos errores,
 * primero un Warning, y luego un Error Fatal que detendrá la ejecución del programa.
 * Mientras que si hacemos un include() de un archivo que no existe, solo recibiremos un Warning que no cancelará la ejecución en curso.
 * Ahora utilizaremos un include para llamar a un archivo inexistente:
 */

<?php

// Utilizando include en un bucle a un archivo incorrecto
for( $i = 10 ; $i <= 12 ; $i ++ )
{
	include("Ejem". $i . ".php");
}

?>
