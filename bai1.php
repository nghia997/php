
<?php
	$name = "Pham Huu Nghia";
	$str = "Huu";
	$trim = 'trim';
	try {
		    echo 'Kiểm tra chuỗi : ';
		    checkInput($name, $str,$trim);
		    echo "<br>";
		} catch (LogicException $e) {
		    echo $e->getMessage();
		    die();
		}
	echo " <b>Bài 1: Single quote và double quotes.</b><br>";
	echo 'Dùng Single quote : Money $__$ money <br>';
	echo "Dùng Double quote : Money \$__\$ money <br>";
	//--------------------------------------------------
	echo "<b>Bài 2: Tìm kiếm trong string.</b><br>";
	echo "Chuỗi cần tìm  { $str } có nằm trong chuỗi cha { $name } không : ";
	seachString($name,$str);
	echo "<br>";
	//-----------------------------------------------------
	echo "<b>Bài 3: Multiple bytes string.</b><br>";
	echo "Kiểm tra { $name } có phải multipe không : ";
	checkMultiple($name);
	echo "<br>";
	//----------------------------------------------------
	echo "<b>Bài 4: TRIM </b><br>";
	$trim1 = trim($trim,'m');
	echo "Chuỗi { $trim } sau khi xóa bỏ m : ".$trim1."<br>";
	$trim2 = strrev($trim);
	$trim2 = ltrim($trim2,'m');
	echo "Chuỗi sau khi đảo ngược và dùng ltrim xóa m : $trim2";
/**
 * Function number 1 in first array
 * 
 */
	function seachString($name,$str)
	{
		$result='';
		$result = strpos($name,$str);
		if ($result != '') {
			echo "True";
		}
		else{
			echo"Flase";
		}

	}
	function checkInput($string1, $string2,$string3)
	{
		if (is_string($string1) && is_string($string2) && is_string($string3))
		{
    		echo 'True';
		}
		else{
     		throw new LogicException('<b>Invalid parameter </b>');
    	}
	}
	function checkMultiple($name)
	{
		$name1 = strlen($name);
		$name2 = mb_strlen($name);
		if($name1!=$name2)
		{
			echo "True";
		}
		else
		{
			echo "False";
		}
	}


?>	