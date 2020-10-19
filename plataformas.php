<!DOCTYPE html>
<html lang="es">
<head>
<title>Principal</title>
<?php
include 'Layouts/style.php';
session_start();

if (!isset($_SESSION['USUARIO_LOGUEADO'])){

    echo'<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.php";   </script>';
}
$USUARIO = $_SESSION['LOGIN'];
$NOMBRE = $_SESSION['NOMBRE'];
?>
  <link rel="stylesheet" href="./Css/bootstrap.min.css">
  <link rel="stylesheet" href="./Css/main.css">
  <link rel="stylesheet" href="Css/estilos_info.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<header>
	<?php 
		include 'Layouts/header.php';
	?>	
	<title>Plataformas</title>
	<!--link rel="stylesheet" type="text/css" href="../Juegos/Css/estilo.css"-->
</header>
<section>	
	<div class="container">
	 <body>
	 <!--main-->
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <!--h1 class="display-4 mt-4">PLATAFORMAS ORIENTADAS A LA PROGRAMACION</h1-->
            <p class="lead">Plataformas orientadas a la programacion <br><br>
            Selecciona la plataforma y continua aprendiendo a programar</p>
        </div>
        <div class="container" id="lista-productos">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-secondary ">
                        <h4 class="my-0 font-weight-bold">CODE.ORG</h4>
                    </div>
                    <div class="card-body">
                        <img src="Images/code_org.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio"><span class="">ADOLESCENTES</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Code.org® es una organización sin fines de lucro dedicada a ampliar el acceso a las ciencias de la computación en las escuelas y aumentar la participación de las mujeres y las minorías.<li>
							<li>Más del 40% del tráfico de nuestro sitio web proviene de países que no son los Estados Unidos, y ese número sigue creciendo. Con el fin de ampliar el acceso a las ciencias de la computación a nivel mundial.</li>
                        </ul>
                        <a href="https://code.org/" class="btn btn-block btn-success agregar-carrito" data-id="7">INGRESAR</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-secondary ">
                        <h4 class="my-0 font-weight-bold">KHAN ACADEMY</h4>
                    </div>
                    <div class="card-body">
                        <img src="Images/khan_academy.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio"><span class="">DIVERSIDAD</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>La programación es el proceso de crear un conjunto de instrucciones que le digan a una computadora cómo realizar una tarea. La programación se puede hacer al usar una variedad de "lenguajes," de programación como SQL, Java, Python y C++.  Creado por Pamela Fox.</li>
                        </ul>
                        <a href="https://es.khanacademy.org/" class="btn btn-block btn-success agregar-carrito" data-id="8">INGRESAR</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-secondary ">
                        <h4 class="my-0 font-weight-bold">SCRATCH</h4>
                    </div>
                    <div class="card-body">
                        <img src="Images/scratch.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio"><span class="">BLOQUES</span> </h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
							<li>Con Scratch puedes programar tus propias historias interactivas, juegos y animaciones — y compartir tus creaciones con otros en la comunidad online.</li>
							<li>Scratch ayuda a los jóvenes a aprender a pensar de forma creativa, a razonar sistemáticamente, y a trabajar de forma colaborativa — habilidades esenciales para la vida en el siglo 21.</li>
                        </ul>
                        <a href="https://scratch.mit.edu/" class="btn btn-block btn-success agregar-carrito" data-id="9">INGRESAR</a>
                    </div>
                </div>
            </div>
        </div>
    <!--/main-->
</section>

<footer>
	<?php 
		include 'Layouts/footer.php';
	?>
</footer>
		<script src="./Js/bootstrap.min.js"></script>
        <script src="./Js/jquery-3.4.1.min.js"></script>
        <script src="Js/Css/main.js"></script>
</body>
</html>