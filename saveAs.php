<?php
	$oldfilename = $_GET['oldformName'].'.txt';
	$newfilename = $_GET['newformName'].'.txt';
	$data=file_get_contents("forms/".$oldfilename);
	file_put_contents("forms/".$newfilename, $data);
?>