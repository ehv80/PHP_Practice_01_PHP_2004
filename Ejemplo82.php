<?

// Arrays en PHP
// Utilizando la función array_fill()
// Esta función completa un array con elementos, tantas veces como se indique en la variable cantidad
// comenzando desde el parámetro desde y se le asigna a cada elemento el valor que se indique en el
// parámetro valor

// Definimos un array
$prueba = array_fill(10, 5, "Hola");

// Listo los elementos del array
while( list($clave, $valor) = each($prueba) )
{
	// Imprimimos los elementos
	echo "El elemento $clave tiene el valor: $valor <br>";
}

?>
