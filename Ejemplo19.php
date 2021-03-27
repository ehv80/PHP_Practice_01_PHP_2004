<?php 
//Ejemplo19.php ReWorked

// Asigno valores a las variables
$precio = 12.5;

// Destruyo a la variable precio
unset($precio);

// Verifico si la variable precio está definida

if(isset($precio))
{
	echo "La variable precio está definida <br>";
}
else
{
	echo "La variable precio NO ESTÁ DEFINIDA PORQUE FUE DESTRUÍDA con unset <br>";
}

?>
