<?

// Arrays en PHP - Trabajando con next y prev

// En el ejemplo anterior vemos que solo recorre el array
// hasta encontrar el 4º elemento que lo evalúa como falso, porque es cero,
// por eso corta la ejecución del do while y no mostrará el resto de los
// elementos del array. Esto sucede con todos los arrays cuyo primer elemento
// tenga como índice cero, o también se da en el caso de un array indexado
// mediante un string donde uno de sus índices es un valor vacío
// Para poder solucionar esta situación debemos inicializar el primer elemento
// del array en el índice 1, de forma tal de forzar el ejemplo anterior
// como vemos a continuación

// El cuarto elemento es cero pero el primer índice es uno no cero
$numeros = array(1 => 15, 2, 8, 0, 34, 11, 15);

// Recorremos el array mediante un for 
for( reset($numeros) ; $pos = key($numeros) ; next($numeros))
{
	// Busco el valor del elemento actual
	$valor = current($numeros);
	
	echo "En el índice " . $pos . " está el elemento: " . $valor . "<br>";
	
};

?>
