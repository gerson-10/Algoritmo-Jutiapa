<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algoritmo Jutiapa</title>
    <?php
    include_once("./Layouts/style.php");
    session_start();

    if (!isset($_SESSION['USUARIO_LOGUEADO'])) {

        //echo'<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.php";   </script>';
    }
    //$_SESSION['LOGIN'];
    ?>

</head>

<body>
    <div class="navbar navbar-expand-md navbar-dark bg-dark">
        <img href="#" src="Images/logo.png" class="nav-link dropdown-toggle img-fluid" height="100px" width="100px" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img><br>
        <a class="activ" href="index.php"><i class="fa fa-fw fa-home"></i> AlgoritmoJutiapa.net</a>&nbsp
        <a href="principal.php"><i class="fa fa-desktop" aria-hidden="true"></i> Inicio</a><br>&nbsp
        <a href="registrar.php"><i class="fa fa-fw fa-user"></i> Registrarse</a><br>&nbsp
        <a href="informacion.php"><i class="fa fa-id-card" aria-hidden="true"></i> Informacion</a><br>&nbsp
        <a class="active" href="cierre_session.php"><i class="fa fa-power-off" aria-hidden="true"></i> Cerrar Session</a>
    </div>
    <div align="center" class="container">
        <h1>Algoritmo Jutiapa</h1>
    </div>
    <div align="left" class="container">
        <img src="Images/creatividad.jpg" class="nav-link dropdown-toggle img-fluid" height="200px" width="300px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
    </div>
    <div align="right" class="container">
        <img src="Images/logo.png" class="nav-link dropdown-toggle img-fluid" height="300px" width="300px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img><br>
    </div>

    <form action="ValidarUsuario.php" method="post" class="login">
        <h3 class="text-center">Inicio de sesión</h3>
        <div class="form-group">
            <label for="Nombre">Usuario</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu correo" required="30">
        </div>
        <div class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Escribe tu Contraseña" required size="16">
        </div>
        <p class="text-center">
            <button class="btn btn-primary btn-block">Login</button>
        </p>
    </form>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/jquery-3.4.1.min.js"></script>
    <script src="Js/Css/main.js"></script>
</body>

</html>