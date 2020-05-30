<?php

// Asigno valores a las variables 

$precio = 12.5;

// Muesrto el Tipo de Variable

echo "<br>Precio $precio es una variable del Tipo: ".gettype($precio);

// Lo cambio a integer
settype($precio,"integer");

// Muestro el Tipo de Variable
echo "<br>Precio $precio es una variable del Tipo: ".gettype($precio);

?>
