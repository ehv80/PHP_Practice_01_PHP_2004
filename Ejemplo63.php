<?

// Arrays en PHP - Trabajando con next y prev

// Definiendo un Array no secuencial
$nombres[10] = "Marcelo";
$nombres[30] = "Juan";
$nombres[44] = "Brenda";
$nombres[8] = "Mariana";

// Llevamos el puntero del array a la primera posición
reset($nombres);

// Recorremos el array
do
 {
	 //Busco la posición
	 $puntero = key($nombres);
	 
	 // Busco el valor del elemento actual
	 $valor = current($nombres);
	 
	 echo "En el índice " . $puntero . " está el elemento: " . $valor . "<br>";
 }
 while(next($nombres));

?>
