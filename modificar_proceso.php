<?php
include("conexion.php");
	
	$id=$_REQUEST['id'];
	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$email= $_POST['email'];
	$telefono= $_POST['telefono'];
	$suit= $_POST['suit'];
	$fllegada= $_POST['fllegada'];
	$fsalida= $_POST['fsalida'];

	$query="UPDATE record_agenda SET nombre='$nombre',apellidos='$apellidos',email='$email', telefono='$telefono', suit='$suit', fllegada='$fllegada', fsalida='$fsalida' WHERE id='$id' ";
	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location: admin.php");
	}else{
		echo "insercion no exitosa";
	}


?>