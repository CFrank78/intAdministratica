<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla de clientes</title>
</head>
<body>
	<center>
		<table border="3">
			<thead>
				<tr>
					<th colspan="1"><a href="index.php">Nuevo</a></th>
					<th colspan="5">Inquilinos</th>
				</tr>				
			</thead>
			<body>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>Email</td>
					<td>Telefono</td>
					<td>Suit</td>
					<td>Fecha de Llegada</td>
					<td>Fecha de Salida</td>
					<td colspan="2">Modificar</td>
					
				</tr>
				<?php
					include("conexion.php");
					$query="SELECT * FROM record_agenda";
					$resultado= $conexion->query($query);
					while($row=$resultado->fetch_assoc()){
				?>

					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellidos']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
						<td><?php echo $row['suit']; ?></td>
						<td><?php echo $row['fllegada']; ?></td>
						<td><?php echo $row['fsalida']; ?></td>
						<td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
						<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
					</tr>

				<?php		
					}

				?>
			</body>
		</table>
	</center>
</body>
</html>