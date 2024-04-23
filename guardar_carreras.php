<?php
	include("BaseDatos.php");
	
	$bd = new BaseDatos();
	/*
	$titulo = "MAT103";
	$descripcion = "Algebra Lineal y teoria Matricial";
	$imagen = "matriz.png";
	$url = "";
	$estado = "1";
	*/
	$nombre = $_POST["nombre"];
	$imagen = $_POST["imagen"];
	$url = $_POST["url"];
	$estado = $_POST["estado"];
	$sql = "insert into carreras(Nombre,imagen,url,estado) values('$nombre','$imagen','$url','$estado');";
	//echo $sql;
	
	$rows = $bd->consulta($sql);
	echo "Datos insertados";
?>