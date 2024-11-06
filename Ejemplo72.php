<?

// Arrays en PHP
// Utilizando la función sort en un array de índice de texto

// Definimos un array
$destinos = array( "bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Ordenamos el array
sort($destinos);

// Listo los elementos del array
while( list( $clave, $valor) = each($destinos) )
{
	// Imprimimos los elementos ordenados
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
