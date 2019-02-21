<?php

	$name = $_FILES["Hinh"]["name"];
	$size = $_FILES["Hinh"]["size"];
	if ($size != 0) {
		move_uploaded_file($_FILES["Hinh"]["tmp_name"],"upload/$name");//$_FILES["Hinh"]["tmp_name"] : Query to file saved in clipboard
		echo "Upload successfully to File Upload to check";	
	}
	else {
		echo "Please select File. And File does not exceed 2M";
	}
	
?>