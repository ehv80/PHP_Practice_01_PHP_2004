<?

// Arrays en PHP
// Utilizando la función sort
// Nos permite ordenar los elementos de un array de un orden numérico o alfabético
// de la siguiente forma: primero los números, luego los signos de puntuación
// y por último las letras. Esta función resulta muy práctica, ya que el array
// nos quedará ordenado de menor a mayor. 

// Definimos un array
$nombres = array( "Gustavo", "Larry", "Daniel", "Diego", "Martín");

// Ordenamos el array
sort($nombres);

// Listo los elementos del array
while( list( $clave, $valor) = each($nombres))
{
	// Imprimimos los elementos ordenados
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
