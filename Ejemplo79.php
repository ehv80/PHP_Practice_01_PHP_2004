<?

// Arrays en PHP
// Utilizando la función range()
// Con la función range podremos definir rápidamente un array
// definiendo un rango de elementos entre dos parámetros de inicio y de fin.

// Definimos un array del 1 al 25
$numeros = range(1,25);

// Listo los elementos del array
while( list( $clave, $valor) = each($numeros) )
{
	// Imprimimos los elementos
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
