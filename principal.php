<!DOCTYPE html>
<html lang="es">
<?php
session_start();

if (!isset($_SESSION['USUARIO_LOGUEADO'])) {

    echo '<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.php";   </script>';
}
$USUARIO = $_SESSION['LOGIN'];
$NOMBRE = $_SESSION['NOMBRE'];
?>

<head>
    <title>Principal</title>
    <?php
    include 'Layouts/style.php';
    ?>
    <link rel="stylesheet" href="Css/style-3.css">
    <link rel="stylesheet" href="Css/estilos_info.css">
</head>

<body>
    <header>
        <?php
        include 'Layouts/header-usuario.php';
        ?>
    </header>

    <div class="section">
        <div class="title">
            <h1>Juegos</h1>
        </div>
        <div class="container">
            <div class="subscribe">
                <div class="icon">
                    <i class="">Bolita</i>
                </div>
                <div class="value">
                    <b>79%</b>
                    <span>Concentracion</span>
                </div>
                <ul class="list">
                    <li>Moviendo el cursor</li>
                    <li>hacia la bolita roja</li>
                    <li>por cada vez que lo</li>
                    <li>consigas, obtienes 1 punto</li>
                </ul>
                <div class="footer">
                    <a href="./Juegos/Bolita/index.html" class="button block-btn">Jugar</a>
                </div>
            </div>
            <div class="subscribe">
                <div class="icon">
                    <i class="">Tetris</i>
                </div>
                <div class="value">
                    <b>80%</b>
                    <span>Estrategia</span>
                </div>
                <ul class="list">
                    <li>Acomodar las piezas</li>
                    <li>completando lineas verticales</li>
                    <li>10 puntos por cada linea completada</li>
                </ul>
                <div class="footer">
                    <a href="./Juegos/Tetris/index.html" class="button block-btn">Jugar</a>
                </div>
            </div>
            <div class="subscribe">
                <div class="icon">
                    <i class="">Preguntas</i>
                </div>
                <div class="value">
                    <b>90%</b>
                    <span>Conocimiento</span>
                </div>
                <ul class="list">
                    <li>Preguntas de conocimiento general</li>
                    <li>valor de 2 puntos por respuesta correcta</li>
                    <li>Prueba tu conocimiento</li>
                </ul>
                <div class="footer">
                    <a href="./Juegos/Preguntas/jugar.html" class="button block-btn">Jugar</a>
                </div>
            </div>
        </div>
    </div><br>

    <footer>
        <?php
        include 'Layouts/footer.php';
        ?>
    </footer>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/jquery-3.4.1.min.js"></script>
</body>

</html>