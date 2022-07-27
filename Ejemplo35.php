
/* 
 * Archivo / @File : Ejemplo35.php
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

// Utilizando switch con la opción defautl
// Using Switch with default option

if( !$envio )
{

?>

<form method="POST" action="Ejemplo35.php">
	<table border="0" width="100%">
		<tr>
			<td width="39%">
				<p align="right">Ingrese el Número de Día de la semana</td> 
			<td width="61%"><input type="text" name="numero" size="5"></td> 
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
	defaut:
		echo "Número incorrecto. El número debe ser del 1 al 7<br>";
		echo "Por favor vuelva atrás e intente nuevamente<br>";
                break;
	} //end switch
} // end if envio

/*
 * En este ejemplo hemos cambiado el formulario, para ingresar los datos a través de un campo de texto
 * en vez de una lista desplegable.
 * También agregamos la opción default, la cuál será ejecutada si no coincide ninguna de las condiciones
 * del case. Por ejemplo si introducimos 99, el programa nos mostrará un mensaje de error como el siguiente
 *
 * 	Número incorrecto. El número debe ser del 1 al 7.
 * 	Por favor vuelva a atrás e intente nuevamente.
 *
 */
?>
