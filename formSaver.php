<?php
	
	$filename = $_POST['formName'].'.txt';
	$data = $_POST['formData'];

	
		file_put_contents("forms/".$filename, $data);
	
?>