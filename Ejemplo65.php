<?

// Arrays en PHP - Trabajando con next y prev
// Definiendo un array no secuencial

$nombres[10] = "Marcelo";
$nombres[30] = "Juan";
$nombres[44] = "Brenda";
$nombres[8]  = "Mariana";

// También podemos recorrer el array no secuencial con un bucle for
// de la siguiente manera

for( reset($nombres) ; $key = key($nombres) ; next($nombres))
{
	// Busco el valor del elemento actual
	$valor = current($nombres);
	
	echo "En el índice " . $key . " está el elemento: ". $valor . "<br>";
}

?>
