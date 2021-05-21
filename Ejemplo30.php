<?php 
/* 
 * Ejemplo30.php / Example30.php
 *
 * Vamos a crear un formulario web / We will create a web form
 * En base a esta tabla / Based on this table
 *
 * 	Estación / Season	Meses / Months
 * 	-----------------	----------------------------------------------------------------------
 * 	Verano / Summer		Diciembre / December (12),   Enero / January (1),     Febrero / February (2)
 * 	Otoño / Autum		Marzo / March (3),           Abril / April (4),       Mayo / May (5)
 * 	Invierno / Winter	Junio / June (6),            Julio / July (7),        Agosto / August (8)
 * 	Primavera / Spring	Septiembre / September (9),  Octubre / October (10)   Noviembre / November (11)
 *
 * Ingresando un valor numérico en el campo de texto nos dirá en que estación estamos
 * Entering a numerical value into the text field it will say in what season we are 
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
if( $mes ==  '' )
{
?>

<form method="POST" action="Ejemplo30.php">
	<p> Ingrese el número de mes sobre el cual desea conocer la estación (entre 1 y 12) </p>
	<p><input type="text"   name="Mes"          size="20">
	   <input type="submit" value="Enviar"      name="Enviar">
	   <input type="reset"  value="Restablecer" name="B2"></p>
</form>

<?php
} // Cierre de llave del primer if / Close brace of the first if
// Ya completado el formulario web averiguamos en que estación esta
// Completed the web form we search what is the season
else
{
	if( $mes == 12 OR $mes == 1 OR $mes == 2 )
	{
		echo "Estamos en Verano / We Are on Summer!";
	}
	else 	// No estamos en Verano, por lo tanto pueden ser las otras estaciones 
		// We aren't on Summer, therefore it may be the other seasons
	{
		if( $mes == 3 OR $mes == 4 OR $mes == 5 )
		{
			echo "Estamos en Otoño / We Are on Autum!";
		}
		else // No estamos en Verano ni en Otoño / We are not in Summer or in Autumn
		{
			if( $mes == 6 OR $mes == 7 OR $mes == 8 )
                	{
                        	echo "Estamos en Invierno / We Are on Winter!";
			}
			else // Solo queda decir que estamos en Primavera / It only remains to say that we are in Spring
			{
				echo "Estamos en Primavera / We Are on Spring!";
			}
		}
	}
}
?>
