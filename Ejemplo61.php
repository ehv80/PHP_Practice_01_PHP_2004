<?

// Arrays en PHP

// Defino e inicializo el array
$mi_array = array("Argentina", "Uruguay", "Mexico", "Chile");

// Cuento los elementos del array para utilizar en el for
$cant_elementos = count($mi_array);

// Ejecuto el bucle for para recorrer $mi_array
for( $i=0; $i < $cant_elementos; $i++)
{
	echo "El elemento de la posición ". $i . " es: " . $mi_array[$i] . "<br>";
}

?>
