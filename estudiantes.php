<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>...</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
</head>

<body>

    <?php include('navbar.php')?>

    <!-- contenido  -->
    <?php
	include("BaseDatos.php");
	
	$bd = new BaseDatos();
    
    $sigla= $_POST["sigla"];
	$asignatura = $_POST["asignatura"];
    $curso = $_POST["curso"];
    $grupo = $_POST["grupo"];
    $sea = $_POST["sea"];
    $parciales = $_POST["parciales"];
    $practicas = $_POST["practicas"];
    $laboratorio = $_POST["laboratorio"];
    $nota_semifinal = $_POST["nota_semifinal"];
    $ex_final = $_POST["ex_final"];
    $nota_final = $_POST["nota_final"];
    $segunda_inst = $_POST["segunda_inst"];
    $ex_invierno_verano = $_POST["ex_invierno_verano"];
	$url = $_POST["url"];
	$estado = $_POST["estado"];
	$sql = "insert into estudiantes(asignatura,curso,grupo,sea,parciales,practicas,laboratorio,nota_semifinal,ex_final,nota_final,
    segunda_inst,ex_invierno_verano,url,estado) 
    values('$asignatura','$curso','$sea','$grupo','$parciales','$practicas',
    '$laboratorio','$nota_semifinal','$ex_final','$nota_final','$segunda_inst','$ex_invierno_verano','$url','$estado');";
	//echo $sql;
	
	$rows = $bd->consulta($sql);
	echo "Datos insertados";
?>
    <!-- contenido  -->

    <?php include('footer.php'); ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

	<!-- script bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>