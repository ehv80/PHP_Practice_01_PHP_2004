<?

// Definiendo un array no secuencial en PHP 

$nombres[10] = "Marcelo";
$nombres[30] = "Juan";
$nombres[44] = "Brenda";
$nombres[8] = "Mariana";

// llevamos el puntero del array a la primera posición
reset($nombres);

// Recorremos el array
while ( list($key, $value) = each($nombres) )
{
	echo "En el índice ". $key . " está el elemento: ". $value . "<br>";
}

?>
