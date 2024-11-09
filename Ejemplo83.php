<?

// Arrays en PHP
// Utilizando la función in_array 
// Con esta función podremos buscar un elemento dentro de un array
// y en caso de que el resultado haya sido exitoso, es decir porque 
// hayamos encontrado un elemento, devolverá un valor verdadero, 
// o falso, en caso contrario.

// Definimos un array
$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

// Busco un elemento en el array
if( in_array("Lunes", $dias))
{
	// Encontré el elemento
	echo "Encontramos el elemento <br>";
}
else
{
	// No encontramos el elemento
	echo "No encontramos el elemento <br>";
}

?>
