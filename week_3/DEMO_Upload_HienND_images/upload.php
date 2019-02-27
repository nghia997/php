<?php
	if(!empty($_FILES)){
		if(is_uploaded_file($_FILES['Hinh']['tmp_name'])){
			$srcPath = $_FILES['Hinh']['tmp_name'];
			$trgPath = "uploads/".$_FILES['Hinh']['name'];
			if(move_uploaded_file($srcPath, $trgPath)){
				?>
				<img src="<?php echo $trgPath; ?>" width="300" height="250"/>
				<?php
			}
		}
	}
?>