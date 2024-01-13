<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guardar Cliente</title>
</head>
<body>
	<center>
		<?php
			$id= $_REQUEST['id'];

			include("conexion.php");
			$query="SELECT * FROM record_agenda WHERE id='$id'";
			$resultado= $conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>
		<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
			

			<br/><br/><br/>
			<input type="text" required name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" /><br/><br/>
			<input type="text" required name="apellidos" placeholder="Apellido" value="<?php echo $row['apellidos']; ?>" /><br/><br/>
			<input type="text" required name="email" placeholder="Email" value="<?php echo $row['email']; ?>" /><br/><br/>
			<input type="text" required name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" /><br/><br/>
			<label>Tipo de Habitacion</label><br/><br/>
			<select required name="suit" value="<?php echo $row['suit']; ?>" >
				<option value="individual">Individual</option>
				<option value="doble">Doble</option>
				<option value="doble matrimonial">Doble Matrimonial</option>
				<option value="suit">Suit</option>
			</select><br/><br/>
			<input type="date" name="fllegada" placeholder="Fecha de Llegada" value="<?php echo $row['fllegada']; ?>" /><br/><br/>
			<input type="date" name="fsalida" placeholder="Fecha de Salida" value="<?php echo $row['fsalida']; ?>" /><br/><br/>
			
			<input type="submit" name="aceptar" value="Aceptar" />
		</form>
	</center>
</body>
</html>