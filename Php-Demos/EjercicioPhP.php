<?php
print("Esto es en código PHP");
print("<br>Valor ");

$m = 5;

print($m + 6);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EjercicioPhP</title>
</head>
<body><h3>Ejericio en PHP y html combinado</h3>
	<?php
	print("Sección de codigo PHP");
	$m = $m + 2;
	print("<br>Ahora el valor cambio es: ".$m);
	?>
	<form action="envio.php">
		<p>Nombre: <input type="text" name="nombre"></p>
		<p>Apellido: <input type="text" name="apellido"></p>
		<p><input type="submit" value="Enviar"></p>
	</form>

</body>



</html>