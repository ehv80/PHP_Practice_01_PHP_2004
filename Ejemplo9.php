<?php

// Procesa los datos de un Formulario y Los Muestra en una pantalla

?>

<html>

<head>
	<title>Procesando datos con un formulario </title>
</head>

<body>

	<p>&nbsp;</p>

	<form method="POST" action="Ejemplo9.php">
		<table border="0" width="100%">
			<tr>
				<td width="100%" colspan="2">Por favor complete el siguiente formulario</td>
			</tr>
			<tr>
				<td width="19%" align="right">Nombre y Apellido:</td>
				<td width="81%"><input type="text" name="nombre" size="29"></td>
			</tr>
			<tr>
				<td width="19%" align="right">E-mail: </td>
				<td width="81%"><input type="text" name="e_mail" size="29"></td>
			</tr>
			<tr>
				<td width="19%"></td>
				<td width="81%"><input type="submit" value="Enviar" name="B1"></td>
			</tr>
		</table>
	</form>
	<p>&nbsp;</p>
</body>

</html>
<?php
	// Imprimo los datos ingresados previamente en negrita
	echo "Su nombre es: <b>$nombre</b> y su dirección de e-mail es: <b>$e_mail</b>";
?>
