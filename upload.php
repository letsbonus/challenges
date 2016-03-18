<?php  

//Esta carpeta DEBE tener permisos de escritura
$target = "upload/";

//BD
$server = "localhost";
$user = "root";
$password = "admin";
$db_name = "letsbonus";

$target = $target . basename( $_FILES['uploaded']['name']) ;  
$ok=1;  

if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))  { 
		
	//Conexion a la BD
	$enlace = mysqli_connect($server, $user, $password, $db_name);
	
	if (!$enlace) {
		header('Location: main.php');
		exit;
	}
	
	
	$fichero = file_get_contents($target, true);
	$array = explode("\t",$fichero);
	
	//Ignoramos el titulo con los campos, empezamos desde la posicion 6 del array
	
	$i=6;
	$registros = 0;
	while ($i < sizeof($array) - 1) {
		
		$title = $array[$i];
		$description = $array[$i +1];
		$price = $array[$i + 2];
		$ini_date = $array[$i + 3];
		$exp_date = $array[$i + 4];
		$status = $array[$i + 5];
		
		$sql = "INSERT INTO `letsbonus.products`(`title`, `description`, `price`, `ini_date`, `exp_date`, `status`) VALUES ('$title', $description, $price, '$ini_date', '$exp_date', '$status')";
		$result = mysql_query($sql);
		$i = $i +6;
		
		if ($result) {
			$registros = $registros + 1;
		}
	}
	
	mysqli_close($enlace);
	
	echo "Se han insertado " + $registros + " registros en la BD";
	
}  else { 
	
	header('Location: main.php');
	exit;
	
} ?>