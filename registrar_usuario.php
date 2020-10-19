<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/alertify.css">
    <script src="Js/alertify.js"></script>
    <!--style type="text/css">
        body {
            background-image: url(Images/fondo10.jpg);
            background-repeat: no-repeat;
            background-size: cover;
    }
    </style-->
    <?php
    include_once("./Layouts/style.php");
    //include_once("./Layouts/inicio.php");
    ?>

</head>
<body>
<div class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> AlgoritmoJutiapa.net</a>
  <a href="index.php"><i class="fa fa-fw fa-user"></i> Ingresar</a>
  <a href="informacion.php"><i class="fa fa-fw fa-share-alt"></i> Informacion by Gerson Ruano</a>
</div>
<div align="center" class="container">
        <h1>Algoritmo Jutiapa</h1>
    </div>
<?php
include_once 'Conf/config.inc.php';

$CORREO=strtoupper($_POST ['correoe']);
$PSW = $_POST ['psw'];
$NOMBRECOMPLETO =strtoupper($_POST ['nombrecompleto']);
$OCUPACION =strtoupper($_POST ['ocupacion']);
$EDAD = $_POST ['edad'];
$db=new Conect_MySql();

$sql = "Insert into tb_usuarios(CORREOE,CLAVE,NOMBRECOMPLETO,OCUPACION,EDAD) values ('".$CORREO."',
MD5('".$PSW."'),'".$NOMBRECOMPLETO."','".$OCUPACION."','".$EDAD."')" or die("Error in the consult.." . mysqli_error($db));

$resultado = $db->execute($sql);
//echo "Bienvenido ",$NOMBRECOMPLETO,"  " ;
//echo "Su Usuario es:",$CORREO;
?>
<script>        
if(!alertify.myAlert){
  //define a new dialog
  alertify.dialog('myAlert',function(){
    return{
      main:function(message){
        this.message = message;
      },
      setup:function(){
          return { 
            buttons:[{text: "Listo!", key:27/*Esc*/}],
            focus: { element:0 }
          };
      },
      prepare:function(){
        this.setContent(this.message);
      }
  }});
}
//alertify.myAlert(
alertify.confirm(" BIENVENIDO <?php echo $NOMBRECOMPLETO ?> SU USUARIO ES: <?php echo $CORREO ?>",
  function(){
    alertify.success('Usuario Creado Exitosamente');
  },
);
</script>
<?php
header( "refresh:6;url=index.php" );
?>

<script src="Js/bootstrap.min.js"></script>
<script src="Js/jquery-3.4.1.min.js"></script>
</body>
</html>