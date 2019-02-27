<?php
	if(!empty($_FILES)){
		if(is_uploaded_file($_FILES['Hinh']['tmp_name'])){
			$srcPath = $_FILES['Hinh']['tmp_name'];
			$trgPath = "uploads/".$_FILES['Hinh']['name'];
			if(move_uploaded_file($srcPath, $trgPath)){
				$myfile=  fopen("$trgPath", 'r') or die("file khong ton tai");
				if (filesize("$trgPath")!=0) {
					echo fread($myfile, filesize("$trgPath"));
					fclose($myfile);
				}else
				{
					echo "Not possible";
				}
				
			}
		}
	}
?>

