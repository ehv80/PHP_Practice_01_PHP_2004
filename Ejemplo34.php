<?php 
/* 
 * Archivo / @File : Ejemplo34.php
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

/* Switch (case) 
 * En muchas ocasiones es necesario que comparemos la misma variable contra varias opciones posibles.
 * Esto lo podríamos hacer con un if como vimos anteriormente o también podemos utilizar la sentencia switch.
 * En este caso, realizaremos un programa donde ingresando el número del día de la semana, 
 * nos indicará el nombre del día de la semana. También iremos incluyendo un poco más de código html 
 * para hacer el ingreso de los datos a través de un formulario más prolijo que los anteriores, así vamos 
 * practicando, ya que luego terminaremos desarrollando aplicaciones totalmente on-line. 
 *
 */
<?
// Utilizando switch 
// Using Switch

if( !$envio )
{

?>

<form method="POST" action="Ejemplo34.php">
	<table border="0" width="100%">
		<tr>
			<td width="39%">
				<p align="right">Ingrese el Número de Día de la semana</td> 
			<td width="61%"><select size="1" name="número">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="5">6</option>
				<option value="7">7</option>
			<select></td>
		</tr>
		<tr>
			<td width="39%"></td>
			<td width="61%"><input type="submit" value="Ver el Resultado" name="envio"></td>
		</tr>
	</table>
</form>

<?
}
else
{
	switch($numero)
	{
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
	} //end switch
} // end if envio

/*
 * En este ejemplo hay dos partes, la primera es la que debe mostrar el formulario para que ingresemos el dato,
 * y la segunda, la que muestra el resultado.
 * Utilizamos un if para separar ambas partes, poniendo como condición si existe la variable envio, que está 
 * definida en el formulario en el siguiente código:
 * 	  input type="submit" value="Ver el Resultado" name="envio" 
 * Entonces nuestro programa pregunta:
 * - Si no está la variable envio (!$envio), muestro el formulario
 * - Si existe, muestro los resultados.
 *
 * Luego de haber seleccionado el número de día de la semana de un formulario con una lista desplegable,
 * presionamos el botón "Ver el Resultado", que lo que hace es ejecutar nuevamente el programa anterior, definido el formulario
 * en el siguiente código:
 * 	form method="POST" action="Ejemplo34.php"
 * y a continuación pasa los valores del formulario (los ocultos y los visibles) nuevamente al programa ejemplo anterior
 *
 * Este recibe dos variables nuevas $envio y $numero y recorre con los datos el switch:
 * · La variable  $envio   le sirve para saber qué debe ejecutar la segunda parte del formulario, como mencionamos anteriormente	
 * · La variable  $numero  le sirve para determinar el día de la semana
 *
 * La setencia del swithc compara el valor del número contra todas las posibilidades existentes, cuando encuentra que se cumple la condición
 * ejecuta todo el código de esa condición desde los : (dos puntos) hasta que encuentre un break; que finaliza la ejecución del switch
 */
?>
