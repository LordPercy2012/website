<?php
	include "conexion.php";
	$platillo=$_POST["platillo"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$direccion=$_POST["direccion"];
	$telefono=$_POST["telefono"];

$colocar="INSERT INTO registro(platillo, nombre, apellido, direccion, telefono) values('$platillo', 'nombre', 'apellido', 'direccion', 'telefono')";

$mens=mysqli_query($conexion, $colocar);
if (!$mens) {
	echo "No se guardó la información";
}else{
	echo "Sí se guardó la información";
}
mysqli_close($conexion);