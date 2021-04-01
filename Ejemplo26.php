<?php 
// Ejemplo26.php ReWorked on English Language
// Error Suppression Operator 	@

// Inicialization of the variables
//$a = 5;
//$result = 0;

// This mathematics operation show an error Because Divide by Zero is impossible

echo "<br>This operation not show an error because on Divide by Zero operation that is impossible have an Error Suppression Operator Before: \@ \$result = 5/0 <br>";

//$result = $a/0;
@$result = 5/0;

echo "<br>The variable result have the value: $result <br>";
?>
