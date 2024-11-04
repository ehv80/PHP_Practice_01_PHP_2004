<?

// Arrays indexados por cadenas de texto en PHP

// Definimos un array de paises

$paises[ar] = "Argentina";
$paises[mx] = "Mexico";
$paises[br] = "Brasil";
$paises[es] = "España";

// Recorremos el array

while( list( $key, $valor) = each($paises) )
{
	echo "El índice " . $key . " tiene el elemento: " . $valor . "<br>";
};

?>
