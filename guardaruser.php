<?php
include("conexion.php");

	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$email= $_POST['email'];
	$telefono= $_POST['telefono'];
	$suit= $_POST['suit'];
	$fllegada= date('Y-m-d', strtotime($_POST['fllegada']));
	$fsalida= date('Y-m-d', strtotime($_POST['fsalida']));

	

	$query="INSERT INTO record_agenda(nombre, apellidos, email, telefono, suit, fllegada, fsalida) VALUES('$nombre','$apellidos','$email', '$telefono', '$suit', '$fllegada','$fsalida')";
	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location: admin.php");
	}else{
		echo "insercion no exitosa";
	}


?>