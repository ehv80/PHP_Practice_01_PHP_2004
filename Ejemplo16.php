<?php 
//Ejemplo16.php REWorked

// Asigno valores a las variables 
// I Asign valúes to the variables

// variable del tipo de dato double 
// variables of data type double
$precio = 12.5;

// Los Arreglos en PHP como en C, su índice comienza en la posición cero 
// Arrays in PHP as in C your index starts at position zero
$nombres[0]="Marcela";
$nombres[1]="Daniel";
$nombres[2]="Gustavo";

if( is_array( $precio ) )
{
	echo "La variable precio es un arreglo/array <br>";
}
else
{
	echo "La variable precio NO es un arreglo/array <br>";
	echo "De hecho es una variable de tipo de dato double <br>";
	echo $precio;
}

if( is_array( $nombres ) )
{
	echo "La variable nombres es un arreglo/array <br>";
	echo "Tiene una longitud o cantidad de elementos: ".sizeof($nombres)."<br>";
	echo "El Primer  elemento del arreglo/array es nombres[0] y su valor es: ".$nombres[0]."<br>";
	echo "El Segundo elemento del arreglo/array es nombres[1] y su valor es: ".$nombres[1]."<br>";
	echo "El Tercer  elemento del arreglo/array es nombres[2] y su valor es: ".$nombres[2]."<br>";
}
else
{
	echo "La variable nombres NO es un arreglo/array <br>"
}

?>
