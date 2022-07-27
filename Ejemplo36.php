 
/* 
 * Archivo / @File : Ejemplo36.php
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
 * Para utilizar el case debemos usar tipos como números enteros o de punto flotante y cadenas de texto.
 * No podremos usar arrays ni objetos, salvo que los convirtamos a un tipo simple.
 * Tambié podemos utilizar la sintaxis alternativa, como hemos visto en el caso del if. 
 * Veamos como aplicarla en este Ejemplo36
 */

<?php

// Utilizando switch con la opción defautl
// Using Switch with default option

// Defino la variable
$numero = 4;

switch($numero):
	case 1:
		echo "Hoy es Lunes";
		break;
	case 2:
                echo "Hoy es Martes";
		break;
	case 3:
                echo "Hoy es Miércoles";
		break;
	case 4:
                echo "Hoy es Jueves";
		break;
	case 5:
                echo "Hoy es Viernes";
		break;
	case 6:
                echo "Hoy es Sábado";
		break;
	case 7:
                echo "Hoy es Domingo";
		break;
	defaut:
		echo "Número incorrecto. El número debe ser del 1 al 7<br>";
		echo "Por favor vuelva atrás e intente nuevamente<br>";
                break;
endswitch;

?>
