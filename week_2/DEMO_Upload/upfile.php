<!DOCTYPE html>
<html>
<head>
	<title>Form Submit</title>
</head>
<body>
	<form action="xulyfile.php" method="post" enctype="multipart/form-data">
		 <!-- enctype="multipart/form-data"> used to upload form,
		 	  If the file is a normal string, it is not balanced	
			  Encoded into 01 bit-->
		<input type="file" name="Hinh"><br/><br/>	
		<input type="submit" name="submit">
	</form>
</body>	
</html>
