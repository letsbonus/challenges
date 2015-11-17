<?php
$app = require __DIR__ . '/../bootstrap.php';

// Action selector
$app->get('/', function () use ($app) {
    
  return $app['twig']->render('index.html');

});

// Upload form
$app->get('/upload', function () use ($app) {
    
  return $app['twig']->render('upload.html');

});

$app->post('/upload', function () use ($app) {

	// Get file information
	if($_FILES['archive']['name'])
	{
		if(!$_FILES['archive']['error'])
		{
			$target_dir = "tmp/";
			$target_file = $target_dir . basename($_FILES["archive"]["name"]);
			$new_file_name = strtolower($_FILES['archive']['tmp_name']);
			move_uploaded_file($_FILES['archive']['tmp_name'], $target_file);
			$message = 'Your file was uploaded correctly!';
			$valid = true;
		}
		//if there is an error...
		else
		{
			$message = 'Ooops! Your upload triggered the following error: '.$_FILES['archive']['error'];
			$valid = false;
		}
	}
	// Process file and normalize data

	$file = $target_file;
	$cols = array();
	ini_set('auto_detect_line_endings', true);

	$fh = fopen($file, 'r');
	$i = 0;

	while (($line = fgetcsv($fh, 1000, "\t")) !== false) {
		// Not header line
		if($i !== 0)	
		{
			$cols[] = $line;
	    }
	    $i++;
	  }
	
	// Store in db
	// Open mysql connection
	$db = new mysqli($app['db.host'], $app['db.user'], $app['db.password'], $app['db.name']);
	$db->query("set names 'utf8'");

	if($db)
	{
		$count=0;
  		foreach ($cols as $item) {

  			

  			if( !getMerchantByName($db, $item[6]) )
  			{
  				$sql = "INSERT INTO merchants (merchant_name, merchant_address) VALUES ( '$item[6]','$item[5]' )";	
  				$result = $db->query($sql);
  				$merchantId = $db->insert_id;
  			}
  			else
  			{
  				$merchantId = getMerchantByName($db, $item[6]);
  			}

  			if(!checkProduct($db, $item[0], $merchantId))
  			{
  				// Normalize dates
  				$item_init_date = date('Y-m-d h:i:s',strtotime($item[3]));
  				$item_expiry_date = date('Y-m-d h:i:s',strtotime($item[4]));

	  			$sql = "INSERT INTO products (item_title, item_description, item_price, item_init_date, item_expiry_date, merchant_id) VALUES (
	  				'$item[0]', '$item[1]', '$item[2]', '$item_init_date', '$item_expiry_date', $merchantId)";
				$count++;
				$db->query($sql);
			}
		}
	}
	if($count > 0){
		$message = "$count items uploaded";
	}
	else
	{
		$message = "These elements exist in the database";
		$valid = false;
	}
	// delete file saved in tmp directory
	unlink($file);

	// Close mysql connection
	

	// Send confirmation message
	return $app['twig']->render('upload.html', [
			'message' => $message,
			'valid' => $valid
		]
	);

});

$app->get('/count', function() use ($app) {

	$db = new mysqli($app['db.host'], $app['db.user'], $app['db.password'], $app['db.name']);
	$db->query("set names 'utf8'");
	
	// Count of product by month
	$resMonth = $db->query("SELECT COUNT(id) AS score, DATE_FORMAT(item_init_date, '%M') as monthname FROM products GROUP BY MONTH(item_init_date)");
	$countMonth = $resMonth->fetch_all();


	// Count of product by merchant
	$resMerchant = $db->query("SELECT COUNT(p.id) AS score, m.merchant_name FROM products AS p LEFT JOIN merchants AS m ON m.id = p.merchant_id GROUP BY p.merchant_id");
	$countMerchant = $resMerchant->fetch_all();

	return $app['twig']->render('list.html', [
		'countMonth' => $countMonth,
		'countMerchant' => $countMerchant
	]);

});

// Check if merchant exists
function getMerchantByName($db, $name)
{
	$q = $db->query("SELECT id FROM merchants WHERE merchant_name='$name'");
	if($q->num_rows){
		while ($merchantInfo = $q->fetch_row()) { return $merchantInfo[0] ; }
	}
	else
	{
		return false;
	}
}

function checkProduct($db, $name, $merchantId)
{
	$q = $db->query("SELECT id FROM products WHERE item_title='$name' AND merchant_id=$merchantId");
	if($q->num_rows){
		while ($productInfo = $q->fetch_row()) { return $productInfo[0] ; }
	}
	else
	{
		return false;
	}	
}

$app->run();