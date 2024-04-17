
<?php 
    include('BaseDatos.php');

    $bd = new BaseDatos();
    $row = $bd->consulta("select * from investigaciones;");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Investigacion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php include('navbar.php')?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Investigaciones</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="index.html">Inicio</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Investigaciones</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 text-center mb-5">
                    <h1 class="mt-2 mb-3">Bienvenido</h1>
                    <h4 class="font-weight-normal text-muted mb-4">La ingeniería mecánica es un campo muy amplio que implica el uso de los 
                        principios de la física para el análisis, diseño y fabricación de sistemas electromecánicos. Tradicionalmente, 
                        a sido la rama de la ingeniería que mediante la aplicación de los principios físicos, ha permitido la creación de 
                        dispositivos útiles, como utensilios y máquinas. Los ingenieros mecánicos usan principios como el calor, las fuerzas , 
                        la conservación de la masa y de la energía para analizar sistemas físicos estáticos y dinámicos, contribuyendo a diseñar 
                        objetos. La ingeniería mecánica es la rama que estudia y desarrolla las máquinas, equipos e instalaciones, considerando 
                        siempre los aspectos ecológicos y económicos para el beneficio de la sociedad. Para cumplir con su labor, la ingeniería 
                        mecánica analiza las necesidades, formula y soluciona problemas técnicos mediante un trabajo multidisciplinario y se apoya 
                        en los desarrollos científicos, traduciéndolos en elementos, máquinas, equipos e instalaciones que presten un servicio 
                        adecuado, mediante el uso racional y eficiente de los recursos disponibles.</h4>
				<!--	<h4 class="font-weight-normal text-muted mb-4"></h4> !-->
                </div>
            </div>
            <div class="row">
				<?php foreach($row as $d){ ?>
					<div class="col-md-4 mb-5">
						<div class="d-flex">
							<i class="fa fa-3x fa-pen text-primary mr-4"></i>
							<div class="d-flex flex-column">
								<h4 class="font-weight-bold mb-3"><?php echo $d['titulo'];?> <?php echo $d['id'];?></h4>
								<p><?php echo $d['descripcion'];?></p>
								
							</div>
						</div>
					</div>
				<?php }?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <?php include('footer.php'); ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>