<?php 
//Ejemplo22.php ReWorked

// Uso de los operadores de comparación

// Inicializamos 2 números
$a = 5;
$b = 3;
echo "<br>Inicializamos 2 variables numéricas<br>";
echo "La variable entera a vale: $a <br>";
echo "La variable entera b vale: $b <br>";

// Operador de Comparación: Igualdad ==
if($a == $b)
{
	echo "<br> Las variables numéricas son iguales: a == b <br>";
	echo "<br> es decir $a == $b <br>";
}
else
{
	echo "<br> Las variables numéricas NO SON IGUALES! <br>";
	echo "<br> pues a vale: $a <br>";
	echo "<br> y    b vale: $b <br>";
}


// Operador de Comparación: Distinto !=
if($a != $b)
{
	echo "<br> Las variables numéricas son distintas: a != b <br>";
        echo "<br> pues a vale: $a <br>";
        echo "<br> y    b vale: $b <br>";

}
else
{
	echo "<br> Las variables numéricas SON IGUALES! <br>";
	echo "<br> es decir $a == $b <br>";
}

// Operador de Comparación: Menor <
if($a < $b)
{
	echo "<br>La variable numérica a inicializada en: $a   ES MENOR QUE  la variable numérica b cuyo valor es: $b <br>";
}
else
{
	echo "<br>La variable numérica a inicializada en: $a   NO ES MENOR QUE   la variable numérica b cuyo valor es: $b <br>";
}

// Operador de Comparación: Mayor >
if($a > $b)
{
        echo "<br>La variable numérica a inicializada en: $a   ES MAYOR QUE  la variable numérica b cuyo valor es: $b <br>";
}
else
{
        echo "<br>La variable numérica a inicializada en: $a   NO ES MAYOR QUE   la variable numérica b cuyo valor es: $b <br>";
}


// Operador de Comparación: Menor o igual <=
if($a <= $b)
{
        echo "<br>La variable numérica a inicializada en: $a   ES MENOR O IGUAL QUE   la variable numérica b cuyo valor es: $b <br>";
}
else
{
        echo "<br>La variable numérica a inicializada en: $a   NO ES MENOR O IGUAL QUE   la variable numérica b cuyo valor es: $b <br>";
}


// Operador de Comparación: Mayor o igual >=
if($a >= $b)
{
        echo "<br>La variable numérica a inicializada en: $a   ES MAYOR O IGUAL QUE   la variable numérica b cuyo valor es: $b <br>";
}
else
{
        echo "<br>La variable numérica a inicializada en: $a   NO ES MAYOR O IGUAL QUE   la variable numérica b cuyo valor es: $b <br>";
}

?>
