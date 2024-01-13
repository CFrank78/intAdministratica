<<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comptible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registros</title>

	
</head>
<body>
	<center>
		<form action="guardaruser.php" method="POST">
			<br/><br/><br/>
			
			<label>Registro de habitaciones</label><br/><br/>
			<input type="text" required name="nombre" placeholder="Nombre" value="" /><br/><br/>
			<input type="text" required name="apellidos" placeholder="Apellido" value="" /><br/><br/>
			<input type="text" required name="email" placeholder="Email" value="" /><br/><br/>
			<input type="text" required name="telefono" placeholder="Telefono" value="" /><br/><br/>
			<label>Tipo de Habitacion</label><br/><br/>
			<select required name="suit">
				<option value="individual">Individual</option>
				<option value="doble">Doble</option>
				<option value="doble matrimonial">Doble Matrimonial</option>
				<option value="suit">Suit</option>
			</select><br/><br/>
			<label>Fecha de llegada</label><br/><br/>
			<input type="date" required name="fllegada" placeholder="Fecha de Llegada" /><br/><br/>
			<label>Fecha de salida</label><br/><br/>
			<input type="date" required name="fsalida" placeholder="Fecha de Salida" /><br/><br/>
			<input type="submit" name="aceptar" value="Aceptar" />	
		</form>
	</center>
</body>
</html>
