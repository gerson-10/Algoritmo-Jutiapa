<!DOCTYPE html>
<html>
<?php
session_start();

if (!isset($_SESSION['USUARIO_LOGUEADO'])) {

    echo '<script type="text/javascript">  alert("usted no está logueado"); window.location.href="index.html";   </script>';
}
$USUARIO = $_SESSION['LOGIN'];
$NOMBRE = $_SESSION['NOMBRE'];
?>

<head>
    <meta charset="UTF-8">
    <title>datos generados</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <?php
    include 'Layouts/header.php';
    include 'Layouts/style.php';
    ?>
</head>

<body>
    <table align="center">
        <tr>
            <td><button button class="btn btn-primary">NOMBRE</button></td>
            <td><button class="btn btn-primary">CORREO ELECTRONICO</button></td>
            <td><button class="btn btn-primary">OCUPACION</button></td>
            <td><button class="btn btn-primary">EDAD</button></td>
            <td>
                <!--td>CODIGO</td--><br>
        </tr>
        <?php
        include 'Conf/config.inc.php';
        $db = new Conect_MySql();
        $sql = "SELECT * FROM tb_usuarios";
        $query = $db->execute($sql);
        while ($datos = $db->fetch_row($query)) { ?>
            <tr>
                <td><?php echo $datos['NOMBRECOMPLETO']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['CORREOE']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['OCUPACION']; ?>&nbsp;&nbsp;</td>
                <td><?php echo $datos['EDAD']; ?>&nbsp;&nbsp;</td>
                <td>
            </tr>

        <?php  } ?>
        <script src="Js/bootstrap.min.js"></script>
        <script src="Js/jquery-3.4.1.min.js"></script>
    </table><br>
    <section class="contenido">
        <article align="center" class="serv1">
            <h4>algoritmojutiapa.net</h4>
            <p>
                usuarios activos
            </p>
            <figure>
                <img src="Images/logo.png" align="center" style="max-width:8%;width:auto;height:auto;">
            </figure>
        </article>
    </section>

</body><center>
<?php
include 'Layouts/footer.php';
?>
</center>

</html>