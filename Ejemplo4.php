<?

$titulo="Este es el título de la página";
$nombre="Martín Sebastián Ramos Monso";

$dia="Domingo";
$vivo="Argentina";
$numero=8;

?>

<html>

<head>
	<title><? echo $titulo; ?></title>
</head>

<body>
	<table border="0" width="100%">
		<tr>
			<td width="100%">Mi nombre es: <b><? echo $nombre; ?></b></td>
		</tr>
		<tr>
			<td width="100%">Mi día preferido es el: <b><font color="#FF0000"><? echo $dia; ?></font></b></td>
		</tr>
		<tr>
			<td width="100%">Vivo en: <b><i><? echo $vivo; ?></i></b></td>
		</tr>
		<tr>
			<td width="100%">Mi número de la suerte es: <u><font size="5"><? echo $numero; ?></font></u></td>
		</tr>
	</table>
</body>

</html>
