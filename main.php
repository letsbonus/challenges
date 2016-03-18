<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Jose Fernandez">
<link rel="icon" href="./favicon.ico">
<title>LetsBonus: Challenges</title>
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="signin.css" rel="stylesheet">

</head>

<body>

	<div class="container">
		<div class="header clearfix">

			<h3 class="text-muted">Challenges</h3>
		</div>

		<div class="jumbotron">
			<h1>Atención!</h1>
			<br>
			<p class="lead">1.- Por favor, seleccione el archivo haciendo click en examinar.</p>


			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-xs-12">
						<input name="uploaded" type="file" />
					</div>
				</div>

				<br> 
				<br>
				<br>
				<br>
				
				<div class="row">
					<div class="col-xs-12">
						<p class="lead">2.- Presione 'Procesar' para dar inicio a la operacion<br>
						<button type="submit" value="Upload" class="btn btn-primary btn-lg">Procesar</button>
					</div>
				</div>
			</form>
		</div>


		<footer class="footer">
			<p>&copy; Amaris.</p>
		</footer>

	</div>
	<!-- /container -->


<script type="text/javascript">


</script>

</body>
</html>