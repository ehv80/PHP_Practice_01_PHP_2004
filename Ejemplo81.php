<?

// Arrays en PHP
// Utilizando la función range()

// Definimos un array de letras de z hasta a
$letras = range("z", "a");

// Listo los elementos del array
while( list( $clave, $valor) = each($letras) )
{
	// Imprimimos los elementos del array
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
