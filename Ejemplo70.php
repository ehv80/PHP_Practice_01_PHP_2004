<?

// Arrays multidimensionales en PHP
// Recorriendo utilizando un bucle

// Definir un array multidimensional
$alimentos = array( "Frutas" => array( "Manzana", "Banana", "Naranja" ), "Verduras" => array( "Tomate", "Zanahoria", "Lechuga" ) );

while( list($clave1) = each($alimentos) )
{
	//Imprimimos los tipos de alimentos
	echo "Dentro de las $clave1 están: <br>";
	
	// Listo las frutas para este tipo de alimento
	while( list( $clave2, $valor ) = each( $alimentos["$clave1"] ) )
	{
		// Imprimimos la fruta
		echo " - $valor <br>";
	}
	
}

?>
