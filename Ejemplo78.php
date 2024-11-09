<?

// Arrays en PHP
// Utilizando la función shuffle
// La función shuffle nos permite mezclar los elementos de un array,
// es decir que cambie en forma aleatoria el orden de los elemtos del array
// que le pasamos como parámetro.

// Definimos un array
$destinos = array("bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Mezclamos los elementos del array de forma aleatoria
shuffle($destinos);

// Listo los elementos del array
while( list( $clave, $valor) = each($destinos) )
{
	// Imprimimos los elementos mezclados
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
