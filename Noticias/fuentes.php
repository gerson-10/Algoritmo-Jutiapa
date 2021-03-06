<!DOCTYPE html>
<html>

<head>
	<title>Fuentes</title>
	<link href="../Css/bootstrap.css" rel="stylesheet" />
	<script src="../Js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/index.css" />
	<style>
		.inline-block>li {
			display: inline-block;
		}
	</style>
</head>

<body>
	<?php
	$url = 'https://newsapi.org/v2/sources?apiKey=428ac4303f1c4dd9b0cf8feb460bd74c';
	$response = file_get_contents($url);
	$NewsData = json_decode($response);

	?>
	<img src="../Images/fondo5.png" align="right" style="max-width:12%;width:auto;height:auto;">
	<img src="../Images/logo.png" align="left" style="max-width:10%;width:auto;height:auto;">
	<div class="jumbotron">
		<h1>&emsp;Algoritmo Jutiapa | Fuentes </h1>
		<ul class="inline-block">
			<li><input type="button" value="<-. ALGORITMO JUTIAPA" onClick=" window.location.href='../principal.php' "></li>
			<li><input type="button" value="NEWS" onClick=" window.location.href='index.php' "></li>
			<li><input type="button" value="TOP NEWS" onClick=" window.location.href='top.php' "></li>
			<li><input type="button" value="FUENTES" onClick=" window.location.href='fuentes.php' "></li>
			<li><input type="button" value="AMERICA LATINA" onClick=" window.location.href='busqueda.php' "></li>
		</ul>
	</div>
	<div class="container-fluid">
		<?php
		foreach ($NewsData->sources as $News) {
		?>
			<div class="row NewsGrid">
				<!--div class="col-md-3">
				<img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" class="rounded">
			</div-->
				<div class="col-md-12">
					<h2>Fuente: <?php echo $News->id ?> </h2>
					<h2>Name: <?php echo $News->name ?></h2>
					<h5>Description: <?php echo $News->description ?> </h5>
					<p>Url: <?php echo $News->url ?> <p>
							<h6>Category: <?php echo $News->category ?> </h6>
							<h6>Languaje: <?php echo $News->language ?> </h6>
							<h6>Country: <?php echo $News->country ?></h6>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</body>

</html>