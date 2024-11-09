<?

// Arrays en PHP
// Utilizando la función krsort
// Esta función opera de manera idéntica a ksort, ordenando el array según sus índices
// pero lo hace en orden inverso, de mayor a menor

// Definimos un array
$destinos = array("bue" => "Buenos Aires", "par" => "París", "mex" => "México", "bra" => "Brasil", "chi" => "Chile");

// Ordenamos el array según sus índices de mayor a menor
krsort($destinos);

// Listo los elementos del array
while( list($clave, $valor) = each($destinos) )
{
	// Imprimimos los elementos ordenados de forma inversa según sus índices
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
