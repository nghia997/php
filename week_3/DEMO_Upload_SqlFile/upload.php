<?php
	if (!empty($_FILES)){
		if (is_uploaded_file($_FILES['Hinh']['tmp_name'])){
			$srcPath = $_FILES['Hinh']['tmp_name'];
			$trgPath = "uploads/".$_FILES['Hinh']['name'];
			if (move_uploaded_file($srcPath, $trgPath)){
				if (filesize("$trgPath")!=0) {
				$myfile= new  SplFileObject("$trgPath");
				 while (!$myfile->eof())
			      {
			        echo $myfile->fgets();
			      }
				}
				else {
					echo "Not possible";
				}
				
			}
		}
	}
?>

