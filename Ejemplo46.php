 
/* 
 * Archivo / @File : Ejemplo46.php
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
 * Veamos ahora como se relacionan el Ejemplo45.php y este Ejemplo46.php 
 */

<?php

// Utilizando require
require "Ejemplo45.php";

// Utilizo las constantes definidas en el Ejemplo45.php
echo "<br>Mi nombre es: ".NOMBRE.", ".APELLIDO."<br>";

// Utilizo la función definida en el Ejemplo45.php
echo "<br>Mis números favoritos son el 4 y el 3<br>";
// Busco el resultado utilizando la función declarada en el Ejemplo45.php (suma_numeros)
echo "<br>Si sumo mis numeros favoritos, el resultado es : ".suma_numeros(4,3)."<br>";
?>
/*
 * Para este ejemplo utilizaremos dos archivos. En el Código del Ejemplo46.php, llamamos
 * al archivo Ejemplo45.php, o sea a todo su contenido y luego utilizamos ese contenido 
 * para que el programa Ejemplo46.php. Así podremos utilizar todo lo que esté definido 
 * en Ejemplo45.php, podremos mostrar las constantes y ejecutar la función suma_numeros().
 * El resultado obtenido debería ser similar al que se muestra en la Figura 21.
 */
