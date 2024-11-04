<?

// Arrays en PHP
// Definiendo un array simple con distintos tipos de elementos

// Inicializamos el array

$mi_array[1] = "Andres Lopez"; // esto es un string
$mi_array[2] = 5; // esto es un entero
$mi_array[3] = 2.3; // esto es un double

// Guardo la suma de 2 elementos del array
$mi_array[4] = $mi_array[2] + $mi_array[3];
$mi_array[5] = $mi_array[4] * 7;
$mi_array[6] = "Gustavo Lopez"; // esto es un string
$mi_array[7] = "Liliana Vigano"; // esto es un string

// Mostramos los valores cargados en el array
echo $mi_array[1] . "<br>";
echo $mi_array[2] . "<br>";
echo $mi_array[3] . "<br>";
echo $mi_array[4] . "<br>";
echo $mi_array[5] . "<br>";
echo $mi_array[6] . "<br>";
echo $mi_array[7] . "<br>";

?>
