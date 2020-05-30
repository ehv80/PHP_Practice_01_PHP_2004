<?php

// Asigno valores a las variables 

$precio = 12.5;

if(settype($precio, "integer"))
{
	echo "Hemos convertido el tipo de dato de la variable precio exitosamente<br>";
}
else
{
	echo "Falló la conversión del Tipo de dato de la variable precio<br>";
}

?>
