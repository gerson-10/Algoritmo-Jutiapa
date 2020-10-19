<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <?php
include_once 'Layouts/style.php';
?>

</head>

<body>
<header>
	<?php 
		include 'Layouts/header.php';
	?>	
</header>

<section>	
	<div align="center" class="container">
	<?php 
			// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
			//require_once('routing.php');
			//include_once('principal.php');	
	 ?>
         <h3> Registrando Usuario </h3>

        </div><br>

        <form align="center" action="registrar_usuario.php"  method="post">
        CORREO:&nbsp;&nbsp;<input type="email" name="correoe" id="correoe" placeholder="Ingrese su correo" required size="30"><br><br>
        PASSWORD:&nbsp;&nbsp;<input type="password" name="psw" id="psw" placeholder="Ingrese su password" required size="16"><br><br>
        NOMBRE Y APELLIDO:&nbsp;&nbsp;<input type="text" name="nombrecompleto" id="nombre_completo" placeholder="Ingrese su nombre y apellido" required size="25"><br><br>
        OCUPACION:&nbsp;&nbsp;<input type="text" name="ocupacion" id="ocupacion" placeholder="Ingrese su ocupacion" required size="30"><br><br>
        EDAD:&nbsp;&nbsp;<input type="number" name="edad" id="edad" placeholder="Ingrese su edad" required size="4"><br><br>
<input type="submit" button class="btn btn-primary" value="Registrarse">
</section><br><br><br><br>

<footer>
	<?php 
		include 'Layouts/footer.php';
	?>
</footer>
</body>
        <script src="Js/bootstrap.min.js"></script>
        <script src="Js/jquery-3.4.1.min.js"></script>
        <script src="Js/Css/main.js"></script>
</html>


