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
        <nav>
        </nav>
        <h3 class="text-muted">Challenges</h3>
      </div>

      <div class="jumbotron">
        <h1>Resultado</h1>
        <?php 
			session_start();
			$salida = $_SESSION['registros'];
		?>
        <p class="lead"><?php echo "Se han insertado $salida registros en la BD"?></p>
      </div>


		<?php 
			if($_SESSION['error']){
			$error = $_SESSION['error'];
			echo "Se ha presentado un error: " . $error;
			}
			
		?>


      <footer class="footer">
        <p>&copy; Amaris.</p>
      </footer>

    </div>
  </body>
</html>