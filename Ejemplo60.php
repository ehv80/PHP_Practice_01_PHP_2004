<?

// Arrays en PHP
// Utilizando el operador => para indicar un número de índice

// Defino e inicializo el array
$mi_array = array( "Argentina", 55 => "Uruguay", "Mexico", "Chile");

echo $mi_array[0] . "<br>";
echo $mi_array[55] . "<br>";
echo $mi_array[56] . "<br>";
echo $mi_array[57] . "<br>";

// Vemos que Uruguay es almacenado en la posición 55
// y todos los elementos siguientes en las posiciones 56, 57, etc
// a menos que se especifique dentro del código concretamente otra posición 
?>
