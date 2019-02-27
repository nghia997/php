<?php
	echo $tmpfname = tempnam("./doc/", "nghia"); //Only get the first 3 characters of the file name
	$handle = fopen($tmpfname, "w");
	fwrite($handle, "Nội dung text");
	fclose($handle);
?>