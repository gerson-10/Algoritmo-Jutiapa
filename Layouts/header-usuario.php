
<div align="center" class="container">
<img src="Images/logo.png" class="nav-link dropdown-toggle img-fluid" height="50px"
                                    width="150px" href="index.php" aria-haspopup="true"
                                    aria-expanded="false"></img>
        <h1>Algoritmo Jutiapa</h1>
    </div>
<div class="navbar">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>AlgoritmoJutiapa.net</a>
  <a href="plataformas.php"><i class="fa fa-fw fa-share-alt"></i> Enlaces a Plataformas</a>
  <a href="./Noticias/index.php"><i class="fa fa-rss" aria-hidden="true"></i> Noticias</a>
  <a href="mensaje.php"><i class="fa fa-fw fa-envelope"></i> Contacto</a>
  <a href="informacion.php"><i class="fa fa-id-card" aria-hidden="true"></i> Informacion</a>
  <a href="cierre_session.php"><i class="fa fa-fw fa-user"></i> Cerrar Session</a>
</div>
<?php
echo ' <br> &nbsp usuario-> ';
echo $_SESSION['LOGIN']; 

date_default_timezone_set('America/Guatemala');
setlocale(LC_TIME, 'spanish');
echo utf8_encode(strftime("<br> &nbsp %A %#d de %B del %Y"));
?>