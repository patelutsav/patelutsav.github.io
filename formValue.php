<?php
	
	$filename = $_GET['formName'].'.txt';
	
	if (file_exists("forms/".$filename)) {
		//echo "The file $filename exists<br>";

		$current = file_get_contents("forms/".$filename);
		//$current = json_encode($current);
		echo $current;
	} else {
		//$file = 'people.txt';
		// Open the file to get existing content
		//$current = file_get_contents($file);
		// Append a new person to the file
		//$current .= "John Smith\n";
		// Write the contents back to the file
		//file_put_contents($filename, $data);
	}
?>