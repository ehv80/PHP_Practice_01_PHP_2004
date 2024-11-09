<?

// Arrays en PHP
// Utilizando la función arsort
// De forma similar a la función asort(), disponemos de la función arsort()
// que ordena el array en forma descendente sin cambiar el tipo de índice.

// Definimos un array
$destinos = array("bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Ordenamos el array
arsort($destinos);

// Listo los elementos del array
while( list( $clave, $valor) = each($destinos))
{
	// Imprimimos los elementos ordenados
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
