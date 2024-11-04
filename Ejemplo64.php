<?

// Arrays en PHP - Trabajando con next y prev
// Definiendo un array no secuencial 

$nombres[10] = "Marcelo";
$nombres[30] = "Juan";
$nombres[44] = "Brenda";
$nombres[8]  = "Mariana";

// Queremos mostrar los valores cargados en el array de forma inversa

// Llevamos el puntero del array al final
end($nombres);

// Recorremos el array
do
{
	// Busco la posición o índice
	$puntero = key($nombres);
	
	// Busco el valor del elemento actual
	$valor = current($nombres);
	
	echo "En el índice " . $puntero . " está el elemento: " . $valor . "<br>";
}
while (prev($nombres));

?>
