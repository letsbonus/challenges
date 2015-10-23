<?php
/* ****************************************************************************
   Configure options:
**************************************************************************** */
$db_host  = 'localhost';
$db_name  = 'letsbonus_db';
$db_user  = 'letsbonus_user';
$db_pwd   = 'secret';
$db_table = 'products';

/* ****************************************************************************
   Begin script
**************************************************************************** */

if( !isset($_POST['submit_btn'])) :
/* ****************************************************************************
   Web Form
**************************************************************************** */
?>
<!doctype html>
<html>
<body>
<form action='index.php' method='post' enctype='multipart/form-data'>
<div class='input'>
    <div class='input_label'>Select file to upload:</div>
    <div class='input_field'><input type='file' name='csvfile'></div>
 </div>
<div class='submit'><input type='submit' name='submit_btn' value='upload'></div>
</form>
</body>
</html>
<?php
die();
endif;

/* ****************************************************************************
   Upload
**************************************************************************** */

/* Get rows from file ****************************************************** */
if(file_exists($_FILES['csvfile']['tmp_name'])) {

    $file_rows = file($_FILES['csvfile']['tmp_name']);
    $csvheader = array_shift($file_rows);       /* Remove header line */
    unlink($_FILES['csvfile']['tmp_name']);     /* Delete tmp file */

} else {

    die('Error: File not uploaded');

}

/* Parse csv fields to array *********************************************** */
$csvdata = array();
if(!empty('file_rows')){

    foreach ($file_rows as $row) {
        $csvdata[] = str_getcsv($row,"\t");
    }

} else {

    die('Error: Empty file');
}

/* Connect to DB *********************************************************** */
$mysqli = @new mysqli("$db_host", "$db_user", "$db_pwd", "$db_name");
if ($mysqli->connect_errno) {
    die('DB Connect Error: ' . $mysqli->connect_errno);
}

/* Prepare query *********************************************************** */
$query = "INSERT INTO $db_table (item_title,item_description,item_price,item_initdate,item_expirydate,merchant_address,merchant_name) VALUES (?,?,?,?,?,?,?)";
if ($stmt = $mysqli->prepare($query)) {

    /* Bind params and exec queries */
    $stmt->bind_param("ssdssss", $item_title,$item_description,$item_price,$item_initdate,$item_expirydate,$merchant_address,$merchant_name);

    foreach ($csvdata as list($item_title,$item_description,$item_price,$item_initdate,$item_expirydate,$merchant_address,$merchant_name)) {
        if (!$stmt->execute()) {
            echo "DB Statement Error: " . $stmt->errno . ' - ' . $stmt->error;
        }
    }
    $stmt->close();

} else {

    die('DB Query Error: '. $mysqli->errno . ' - ' . $mysqli->error);

}

/* Get results per month *************************************************** */
$query = "SELECT MONTH(item_initdate) AS month, count(id) AS count FROM products GROUP BY MONTH(item_initdate) ORDER BY month ASC";
$result = $mysqli->query($query);
while($row = $result->fetch_array(MYSQLI_ASSOC))
{
    $months[] = $row;
}

/* Get results per Merchant Name ******************************************* */
$query = "SELECT merchant_name AS merchant, count(id) AS count FROM products GROUP BY merchant_name ORDER BY merchant_name ASC";
$result = $mysqli->query($query);
while($row = $result->fetch_array(MYSQLI_ASSOC))
{
    $merchants[] = $row;
}

/* ****************************************************************************
   Display results
**************************************************************************** */
?>
<!doctype html>
<html>
<body>
<p>File uploaded to database.</p>

<p>Products per month:</p>
<table border=1>
    <tr><td>Month</td><td>Count</tr>
<?php
foreach ($months as $month) {
    echo '<tr><td>' . $month['month'] . '</td><td>' . $month['count'] . '</td></tr>';
}
?>
</table>
<p>Products per merchant:</p>
<table border=1>
    <tr><td>Merchant</td><td>Count</tr>
<?php
foreach ($merchants as $merchant) {
    echo '<tr><td>' . $merchant['merchant'] . '</td><td>' . $merchant['count'] . '</td></tr>';
}
?>
</table>
</body>
</html>