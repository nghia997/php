
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
	clearTrim($trim);

/**
 * Function check if the string is in the other string
 * @param $result holds the position of the string
 * @return void. 
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

/**
 * Function Is the input check valid
 * @param array $string1 to check.
 * @param array $string2 to check.
 * @param array $string3 to check
 * @return void. 
 */

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

/**
 * Function string test is Multiple
 * @param $name1 string length
 * @param $name2 standard string length
 * @return void. 
 */

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

/**
 * Function Use trim to delete characters
 * @param $trim1 delete string m.
 * @param $trim2 Reverse and delete m.
 * @return void.
 */

	function clearTrim($trim)
	{
		$trim1 = trim($trim,'m');
		echo "Chuỗi { $trim } sau khi xóa bỏ m : ".$trim1."<br>";
		$trim2 = strrev($trim);
		$trim2 = ltrim($trim2,'m');
		echo "Chuỗi sau khi đảo ngược và dùng ltrim xóa m : $trim2";
	}


?>	