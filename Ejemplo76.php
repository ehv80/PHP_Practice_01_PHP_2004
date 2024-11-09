<?

// Arrays en PHP
// Utilizando la función ksort
// Esta función ordena el array de acuerdo con su índice y lo hace de menor a mayor

// Definimos un array
$destinos = array("bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Ordenamos el array según sus índices de menor a mayor
ksort($destinos);

// Listo los elementos del array
while( list( $clave, $valor) = each(destinos) )
{
	// Imprimimos los elementos del array ordenados según sus índices de menor a mayor
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
