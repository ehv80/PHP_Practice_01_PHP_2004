<?php 
// Ejemplo29.php ReWorked on English Language
// Conditional Sentences

// Inicialization of the variables
// This little program show us if we stay on summer 
// For This we take like parameter that the months of the year that correspond to summer
// are December, January, February and March
// and yours numbers are 12, 1, 2 y 3
// In this example we go pass the value of the variable like a parameter 
// on the url and it look like this for the January month
//
//	http://127.0.0.1:8080/01_PHP_2004/Ejemplo29.php?month=1
//
echo "<br>Now the integer month variable is passed like a parameter on the URL behind the character ? <br>";
if($month == 12 or $month == 1 or $month == 2 or $month == 3)
{
	echo "<br>The number of the month variable correspond to a month of summer <br>";
	echo "<br>Like This:  <br>";
	echo "<br>12 is December  <br>";
	echo "<br> 1 is January <br>";
	echo "<br> 2 is February <br>";
	echo "<br> 3 is March <br>";
	echo "<br>And all this month are calurous or at least must been <br>";
}
else
{
	echo "<br>The number of the month variable NOT correspond to a month of summer <br>";
}

?>
