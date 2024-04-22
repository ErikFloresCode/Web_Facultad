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
	$titulo = $_POST["titulo"];
	$descripcion = $_POST["descripcion"];
	$imagen = $_POST["imagen"];
	$url = $_POST["url"];
	$estado = $_POST["estado"];
	$sql = "insert into investigaciones(titulo,descripcion,imagen,url,estado)values('$titulo','$descripcion','$imagen','$url','$estado');";
	//echo $sql;
	
	$rows = $bd->consulta($sql);
	echo "Datos insertados";
?>