<?php
	if (isset($_GET['file'])) {
		$filename = $_GET['file'];
		$file = "src/" . $filename;

		header("Content-Description: File Transfer");
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment; filename=\"$filename\"");

		readfile ($file);
		// Need to add error checking if the file doesn't exist
	}else{
	    echo "File not specified";
	}
?>