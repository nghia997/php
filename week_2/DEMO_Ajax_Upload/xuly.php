<?php

	$name = $_FILES["Hinh"]["name"];
	$size = $_FILES["Hinh"]["size"] / 1048576;
	if ($size >= 5 ) {
		move_uploaded_file($_FILES["Hinh"]["tmp_name"],"upload/$name");//$_FILES["Hinh"]["tmp_name"] : Query to file saved in clipboard	
		echo "upload success";
	}
	else {
		echo "Please select File. And the file is not smaller than 5M";
	}
	
?>