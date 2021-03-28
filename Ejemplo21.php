<?php 
//Ejemplo21.php ReWorked

// Integración de 3 Ejemplos en 1

// Asigno valores a las variables (Inicialización)
$a = 3;
$b = 5;
$num1 = 1;
$nombre = "Esteban";
$apellido = "Trotta";
$promedio = 0;
$resultado ="a";
$primer_caracter ="a";
$ultimo_caracter ="a";

// Calculamos el Promedio: (variable a + variable b ) / 2 
// y asignamos su valor a la variable promedio
$promedio = ( $a + $b) / 2;

// Mostramos el Promedio de las varibales a y b
echo "El Promedio de las variables a cuyo valor es: $a <br>";
echo "y <br>";
echo "b cuyo valor es: $b <br>";
echo "Se calcula (a + b) / 2 y su valor es: $promedio <br>";

// Se puede usar al igual que en el Lenguaje de Programación C 
// la combinación de operadores aritméticos += 
// de este modo la expresión $num1 += 3
// es interpretada por PHP como 
// $num1 = $num1 + 3
echo "<br>La variable num1 vale: $num1 <br>";
echo "Al usar la combinación de operadores aritméticos: \$num1 += 3 <br>";
$num1 += 3;
echo "PHP lo interpreta como \$num1 = \$num1 + 3 <br>";
echo "Y su valor es $num1 <br>";

// El operador de concatenación de cadena de caracateres o variabales que las contienen es el .
echo "<br>La variable nombre tiene la cadena de caracteres: $nombre <br>";
echo "La variable apellido tiene la cadena de caracteres: $apellido <br>";
echo "Para concatenar dos variables con cadenas de caracteres usamos el operador . <br>";
echo "de esta manera: echo ( \$nombre . \" \" . \$apellido )  <br>";
// Tener cuidado al usar la combinación del caracter de escape \[caracter especial
echo "y lo que muestra es: <br>";
echo ($nombre . " " . $apellido);
echo "<br>";

// Reasignamos otro valor a la variable nombre
$nombre = "Federico";
echo "<br> Ahora la variable nombre tiene la cadena de caracteres: $nombre <br>";

// Agregamos más caracteres a la variable nombre, van a darse cuenta que se trata de una areglo de caracteres
echo "Agregamos más caracteres a la variable nombre, van a darse cuenta que se trata de una areglo de caracteres <br>";
echo "de esta manera: \$nombre = \$nombre . \" Perez\" <br>";
$nombre = $nombre . " Perez";
echo "y ahora la variable nombre contiene la cadena de caracteres: $nombre <br>";

// También podemos concatenar caracteres de la siguiente forma con la combinación de operadores .=
$nombre = "Federico";
echo "<br>La variable nombre ahora contiene : $nombre <br>";
echo "y le podemos concatenar caracteres de la siguiente forma con la combinación de operadores .= <br>";
echo "\$nombre .= \" Perez\" <br>";
$nombre .= " Perez";
echo "y ahora nombre contiene: $nombre <br>";

// Vamos a mostrar un texto y un valor con formato
$nombre = "Larry Crozio";
echo "<br>Ahora la variable nombre contiene la cadena de caracteres: $nombre <br>" ;
// Asignamos una cadena de caracteres con formato incluído a la variable resultado
$resultado = "<p>El Nombre es: $nombre </p> ";
echo "Asignamos una cadena de caracteres con formato incluído a la variable resultado <br>";
echo "De esta manera <br>";
echo "\$resultado = \" < p > El Nombre es: \$nombre < /p > \" <br>";
echo "y ahora la variable resultado contiene: $resultado <br>";

echo "<br> Ahora vamos a concatenar dos variables <br>";
$nombre = "Bárbara";
echo "La variable nombre ahora contiene la cadena de caracteres:  $nombre <br>";
$apellido = "Perez";
echo "La variable apellido ahora contiene la cadena de caracteres:  $apellido <br>";
$resultado = $nombre ." ". $apellido;
echo "Concatenamos ambas variables de esta manera asignándolo a la variable resultado <br>";
echo "\$resultado = \$nombre .\" \". \$apellido <br>";
echo "Y ahora la variable resultado contiene: $resultado <br>";

// Podemos ver el Primer Valor de una variable que contiene una cadena de caracteres
echo "<br>Podemos ver el Primer Valor de una variable que contiene una cadena de caracteres o String <br>";
$nombre = 'Carlos'; 
// notar el uso de comilla simple
echo "La variable nombre ahora contiene la cadena de caracteres: $nombre <br>";
echo "El Primer caracter de la variable nombre se obtiene con la notación de su índice inicial 0: \$nombre[0] <br>";
$primer_caracter = $nombre[0];
echo "y su valor es : $primer_caracter ";

// Podemos ver el Último valor de una variable que contiene una cadena de caracteres 
echo "<br>Y también podemos ver el Último valor de una variable que contiene una cadena de caracteres <br>";
$nombre = 'Carlos'; 
// notar el uso de comilla simple
echo "La variable nombre ahora contiene la cadena de caracteres: $nombre <br>";
echo "El Último caracter de la variable nombre se obtiene con la notación de su índice final <br>";
echo "Para obtener el valor del índice final se usa la función para arreglos strlen <br>";
echo "De esta manera: índice final = tamaño del arreglo de caracteres - 1 <br>";
echo "es decir: strlen(\$nombre)-1 <br>";
$ultimo_caracter = $nombre[strlen($nombre)-1];
echo "y su valor es \$nombre [ strlen ( \$nombre ) - 1 ]: $ultimo_caracter <br>";

?>
