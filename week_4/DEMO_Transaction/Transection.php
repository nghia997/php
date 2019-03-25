<?php
	$conn = new PDO('mysql:host=localhost;dbname=thucan','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	try{
		$conn-> beginTransaction();	
		$conn->exec("INSERT INTO loai_mon_an(id,ten_loai,mo_ta) VALUES ('1','ca','ngon')");
		$conn->commit();
		echo "thanh công";
	}
	catch(PDOException $exception){
		$conn->rollBack();
		echo $exception->getMessage();
	}
?>