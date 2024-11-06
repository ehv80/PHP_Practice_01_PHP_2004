<?

// Arrays en PHP
// Utillizando la función asort en un array de índice de texto
// La función asort nos permite ordenar un array de índice de texto
// manteniendo el valor de sus índices. Esta función recibe como parámetro
// el nombre del array que vamos a ordenar. El ordenamiento que realiza
// será de menor a mayor

// Definimos un array
$destinos = array("bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Ordenamos el array
asort($destinos);

// Listos los elementos del array 
while( list($clave, $valor) = each($destinos) )
{
	// Imprimimos los elementos ordenados
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
