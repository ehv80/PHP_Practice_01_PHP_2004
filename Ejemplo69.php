<?

// Arrays multidimensionales en PHP

// Vimos que en un array podemos guardar distintos tipos de elementos
// esto significa que también podemos guardar dentro de un array otros arrays
// Por ejemplo, si tenemos el grupo de alimentos, por un lado frutas y 
// por otro verduras, crearemos un array con estos dos elementos

// Definir un array multidimensional
$alimentos = array( "Frutas" => array( "Manzana", "Banana", "Naranja" ), "Verduras" => array( "Tomate", "Zanahoria", "Lechuga" ) );

// Imprimo como ejemplo Zanahoria
echo ( $alimentos["Verduras"][1]);
echo "<br>";

echo "Las Frutas son: " . "<br>";
echo ($alimentos["Frutas"][0]) . "<br>";
echo ($alimentos["Frutas"][1]) . "<br>";
echo ($alimentos["Frutas"][2]) . "<br>";
echo "Las Verduras son: " . "<br>";
echo ($alimentos["Verduras"][0]) . "<br>";
echo ($alimentos["Verduras"][1]) . "<br>";
echo ($alimentos["Verduras"][2]) . "<br>";

?>
