<?php
include("conexion.php");
	
	$id=$_REQUEST['id'];

	$query="DELETE FROM record_agenda WHERE id='$id' ";
	$resultado= $conexion->query($query);

	if ($resultado) {
		header("Location: admin.php");
	}else{
		echo "insercion no exitosa";
	}


?>