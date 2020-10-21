<!DOCTYPE html>
<html lang="es">
        <head>
<?php
include 'Layouts/style.php';

session_start();

if (!isset($_SESSION['USUARIO_LOGUEADO'])){

    echo'<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.php";   </script>';
}
$USUARIO = $_SESSION['LOGIN'];
$NOMBRE = $_SESSION['NOMBRE'];
?>
 </head>
<body> 
<?php
include './Layouts/header.php';
?>   
<form align="center" action="registrar_mensaje.php"  method="post">
        CORREO:&nbsp;&nbsp;<input type="email" name="correoe" id="correoe" placeholder="Ingrese su correo electronico" required size="25"><br><br>
        NOMBRE Y APELLIDO:&nbsp;&nbsp;<input type="text" name="nombrecompleto" id="nombre_completo" placeholder="Ingrese su nombre y apellido" required size="25"><br><br>
        EDAD:&nbsp;&nbsp;<input type="number" name="edad" id="edad" placeholder="Ingrese su edad" required size="4"><br><br>
        <textarea name="comentarios" rows="6" cols="50" >mensaje..</textarea><br>
        <input type="submit" button class="btn btn-primary" value="Enviar Comentario">
</form><br>
<script src="Js/bootstrap.min.js"></script>
<script src="Js/jquery-3.4.1.min.js"></script>
<?php
include './Layouts/footer.php';
?>
</body>
</html>


