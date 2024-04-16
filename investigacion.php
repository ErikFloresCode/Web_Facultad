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
                    <h4 class="font-weight-normal text-muted mb-4">En esta pagina de investigaciones de nuestra facultad. Aquí podrás encontrar una amplia gama de proyectos de investigación realizados por nuestros talentosos académicos y estudiantes. Nuestro objetivo es fomentar la excelencia en la investigación y contribuir al avance del conocimiento en diversas áreas del saber.</h4>
					<h4 class="font-weight-normal text-muted mb-4">En este espacio, podrás explorar investigaciones innovadoras, estudios de vanguardia y publicaciones relevantes que reflejan el compromiso de nuestra facultad con la investigación de alta calidad. Además, te invitamos a descubrir los grupos de investigación activos, los laboratorios equipados con tecnología de punta y las colaboraciones interdisciplinarias que enriquecen nuestra comunidad académica.</h4>
                </div>
            </div>
            <div class="row">
				<?php for($i=1;$i<=6;$i++){ ?>
					<div class="col-md-4 mb-5">
						<div class="d-flex">
							<i class="fa fa-3x fa-pen text-primary mr-4"></i>
							<div class="d-flex flex-column">
								<h4 class="font-weight-bold mb-3">Web Design <?php echo $i?></h4>
								<p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr
									erat</p>
								<a class="font-weight-semi-bold" href="">Read More <i
										class="fa fa-angle-double-right"></i></a>
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