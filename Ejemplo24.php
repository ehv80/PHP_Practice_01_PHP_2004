<?php 
//Ejemplo24.php ReWorked on English Language

/* The Use of the Logical Operators
 *
 * * 	And 	&&	Returns true if both operands are true 
 * *	Or	||	Returns true if at least one of the operands is true
 * *	Xor	Xor	Returns true if only one of the operands is true
 * *	Not	!	Negation changes the value of the variable
 * *
 */

// Inicialization of the variables
$a = 3;
$b = 4;
$neg_a = 0;

echo "<br>Inicialization of the integer variable a that your value is: $a <br>";
echo "<br>Inicialization of the integer variable b that your value is: $b <br>";

// Logical Operator 	&&	Returns true if both operands are true
echo "<br> We will go to verify if both operands are True with Logical Operator:	&& <br>";
echo "<br>\$a == 3  && \$b == 4  <br>";
if ( $a == 3 && $b == 4 )
{
	echo "<br>Yeah! It's TRUE : BOTH OPERANDS ARE TRUE on THIS and LOGICAL OPERATOR  <br>";
}
else
{
	echo "<br>Negative! It's FALSE Because SOME OF THE OPERANDS ARE FALSE on THIS and LOGICAL OPERATOR  <br>";
}

// Logical Operator     AND      Returns true if both operands are true
echo "<br> We will go to verify if both operands are True with Logical Operator:        and <br>";
echo "<br>\$a == 3  and \$b == 4  <br>";
if ( $a == 3 and $b == 4 )
{
        echo "<br>Yeah! It's TRUE : BOTH OPERANDS ARE TRUE on THIS and LOGICAL OPERATOR  <br>";
}
else
{       
        echo "<br>Negative! It's FALSE Because SOME OF THE OPERANDS ARE FALSE on THIS and LOGICAL OPERATOR  <br>";
}

// Logical Operator     OR      Returns true if at least one of the operands is true
echo "<br> We will go to verify if at least one of the operands is true with Logical Operator:        OR <br>";
echo "<br>\$a == 3 or  \$b == 4  <br>";
if ( $a == 3 or $b == 4 )
{
        echo "<br>Yeah! It's TRUE: at least one of the operands IS TRUE on THIS or LOGICAL OPERATOR  <br>";
}
else
{
        echo "<br>Negative! It's FALSE Because BOTH  OPERANDS ARE FALSE on THIS or LOGICAL OPERATOR  <br>";
}

// Logical Operator     ||      Returns true if at least one of the operands is true
echo "<br> We will go to verify if at least one of the operands is true with Logical Operator:        || <br>";
echo "<br>\$a == 3  ||  \$b == 4  <br>";
if ( $a == 3 || $b == 4 )
{
        echo "<br>Yeah! It's TRUE: at least one of the operands IS TRUE on THIS || LOGICAL OPERATOR  <br>";
}
else
{
        echo "<br>Negative! It's FALSE Because BOTH OPERANDS ARE FALSE on THIS || LOGICAL OPERATOR  <br>";
}

// Logical Operator     Xor     Returns true if only one of the operands is true 
echo "<br> We will go to verify if only one of the operands is true with Logical Operator:        Xor <br>";
echo "<br>\$a == 3  Xor  \$b == 4  <br>";
if ( $a == 3 Xor $b == 4 )
{
        echo "<br>Yeah! It's TRUE: only one of the operands IS TRUE on THIS Xor LOGICAL OPERATOR  <br>";
}
else
{
        echo "<br>Negative! It's FALSE Because BOTH OPERANDS ARE FALSE OR BOTH OPERANDS ARE TRUE on THIS Xor LOGICAL OPERATOR  <br>";
}

// Logical Operator     !     Negation changes the value of the variable 
echo "<br> We will go to negate the value of the operand  with Logical Operator:        not	! <br>";
echo "<br>Then asign to variable neg_a <br>";
$neg_a = !$a;
echo "<br>\$neg_a = !\$a    <br>";
if ( $neg_a == -3 )
{
        echo "<br>Yeah! It's TRUE: The Negation of the a variable is !\$a with the value of: $neg_a <br>";
}
else
{
        echo "<br>Negative! It's FALSE The Negation of the a variable isn't !\$a with value : $neg_a <br>";
}

?>
