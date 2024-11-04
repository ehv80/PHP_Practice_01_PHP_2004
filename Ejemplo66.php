<?

// Arrays en PHP - Trabajando con next y prev 
// next y prev devuelven false si un valor es cero
// como vemos en el siguiente ejemplo
// que no muestra todos los elementos del array
// solamente muestra 15, 2, 8

// El cuarto elemento es cero
$numeros = array( 15, 2, 8, 0, 34, 11, 15);

reset($numeros);

// Recorremos el array
do
{
	// Busco la posición o índice actual
	$pos = key($numeros);
	
	// Busco el valor del elemento actual
	$valor = current($numeros);
	
	echo "En el índice ". $pos . " está el elemento: " . $valor . "<br>";
}
while( next($numeros) );

?>
