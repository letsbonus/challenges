<?php
date_default_timezone_set('UTC');

include_once 'DataManipulator.php';

$host = "localhost";
$username = "root";
$password = "root";
$database = "letsbonus";
$conn = false;

if(isset($_POST["submit"]) && isset($_FILES['fileToConvert'])) {
    $conn = new mysqli($host, $username, $password, $database);// mysql_connect($host,$username,$password);
	if(!$conn) {
		die ("Cannot connect to the database");
	}

	$contents = file_get_contents($_FILES['fileToConvert']['tmp_name']);
	$manipulator = new DataManipulator($conn);
	$manipulator->conversion($contents);
	
	$conn->close();
}

?>
