<?php

//TODO serialise $result array to store in database use largetext to store 
//loop through $result array count [item init date] with same month 
//loop through $result array count number of items with same [merchant name] 

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

$result = array();
$data = fopen($target_path,'r');
if (($headers = fgetcsv($data, 0, "\t")) !== FALSE)
  if ($headers)
    while (($line = fgetcsv($data, 0, "\t")) !== FALSE) 
      if ($line)
        if (sizeof($line)==sizeof($headers))
          $result[] = array_combine($headers,$line);
fclose($data);
echo('<pre>');
print_r($result);


?>
