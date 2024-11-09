<? 

// Arrays en PHP
// utilizando la función rsort
// Esta función es exactamente igual a la función sort 
// con la diferencia que hace un ordenamiento a la inversa de la función sort,
// por lo que los elementos de nuestro array quedarán ordenados de mayor a menor.

// Definimos un array
$destinos = array("bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Ordenamos el array de mayor a menor a la inversa
rsort($destinos);

// Listo los elementos del array
while( list( $clave, $valor) = each($destinos))
{
	// Imprimimos los elementos ordenados inversamente
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
